<?php

namespace App\Http\Controllers\Admin;

use App\BorrowHistory;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;

class BorrowController extends Controller
{
    public function index()
    {
        return view ('admin.borrow.index',[
            'title' => 'Data Buku Yang Dipinjam',
        ]);
    }
    public function returnBook(Request $request, BorrowHistory $borrowHistory)
    {
        $borrowHistory->update([
            'returned_at' => Carbon::now(),
            'admin_id' => auth()->id(),
        ]);
        $borrowHistory->book()->increment('qty');

        return redirect()->back()->withSuccess('Buku Dikembalikan');
    }
}
