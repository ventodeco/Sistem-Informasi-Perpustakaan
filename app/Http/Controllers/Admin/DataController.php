<?php

namespace App\Http\Controllers\Admin;

use App\Author;
use App\Book;
use App\BorrowHistory;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DataController extends Controller
{
    public function authors()
    {
    	$authors = Author::orderBy('name', 'ASC');

    	return datatables()->of($authors)
    		->addColumn('action', 'admin.author.action')
    		->addIndexColumn()
    		->toJson();
    }

    public function books()
    {
    	$books = Book::orderBy('title', 'ASC');

    	return datatables()->of($books)
            ->addColumn('author', function(Book $book){
                return $book->author->name;
            })
            ->editColumn('cover', function(Book $book){
                return '<img src="' . $book->getCover() . '" height="150px">';
            })
            ->addColumn('action', 'admin.book.action')
    		->addIndexColumn()
            ->rawColumns(['cover', 'action'])
    		->toJson();
    	
    }


    public function borrows()
    {
        $borrows = BorrowHistory::latest();

        return datatables()->of($borrows)
            ->addColumn('user', function(BorrowHistory $model){
                return $model->user->name;
            })
            ->addColumn('book', function(BorrowHistory $model){
                return $model->book->title;
            })
            ->addColumn('action', 'admin.borrow.action')
            ->addIndexColumn()
            ->rawColumns(['action'])
            ->toJson();
    }
}
