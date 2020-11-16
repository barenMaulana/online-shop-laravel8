<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\TransactionStore;
use App\Models\Transaction;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'title' => 'sportline | transaction',
            'breadCrumb' => 'Transaction',
            'transactions' => DB::table('users')->join('transactions', 'users.id', '=', 'transactions.user_id')
                ->select('users.*', 'transactions.*')
                ->simplePaginate(5)
        ];
        return view('pages.admin.transaction.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TransactionStore $request)
    {
        $validated = $request->validated();
        if (Transaction::insert([
            'user_id' => $validated['user_id'],
            'product_name' => $validated['product_name'],
            'product_price' => $validated['product_price']
        ])) {
            session()->flash('status', 'Pesanan baru!');
            return redirect()->to(url('admin/transactions'));
        } else {
            session()->flash('status', 'Gagal pesan produk!');
            return redirect()->to(url('admin/transactions'));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function show(Transaction $transaction)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Transaction $transaction)
    {
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (Transaction::find($id)
            ->delete()
        ) {
            session()->flash('status', 'pesanan terhapus!');
            return redirect()->to(url('admin/transactions'));
        } else {
            session()->flash('status', 'Gagal menghapus pesanan!');
            return redirect()->to(url('admin/transactions'));
        }
    }

    public function cart()
    {
        $data = [
            'title' => 'sportline | keranjang',
            'breadCrumb' => 'Keranjang',
            'transactions' => DB::table('users')->join('transactions', 'users.id', '=', 'transactions.user_id')
                ->select('users.*', 'transactions.*')
                ->where('users.id', auth()->user()->id)
                ->get()
        ];
        $hasil = 0;
        foreach ($data['transactions'] as $key => $total) {
            $hasil += $total->product_price;
        }
        $data['total'] = $hasil;
        return view('pages.admin.transaction.cart', $data);
    }

    public function hapusBelanja($id)
    {
        if (Transaction::find($id)
            ->delete()
        ) {
            session()->flash('status', 'pesanan terhapus!');
            return redirect()->to(url('admin/cart'));
        } else {
            session()->flash('status', 'Gagal menghapus pesanan!');
            return redirect()->to(url('admin/cart'));
        }
    }
}
