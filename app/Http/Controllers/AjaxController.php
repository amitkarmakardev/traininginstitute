<?php

namespace App\Http\Controllers;

use App\Book;
use App\LibUser;
use App\Repositories\BookRepository;
use Illuminate\Http\Request;

class AjaxController extends Controller
{

    public function getBookDetails($id)
    {
        $book = Book::find($id);
        if ($book == null) {
            echo "<span style='color: red'>Error: Invalid Book ID </span>";
        } else {
            if ($book->currentStatus() == 'issued') {
                echo "<span style='color: red'>Error: Book Already Issued </span>";
            } else {
                $details = $book->title . ', ' . $book->author_details;
                echo "<span style='color: #5856ff'> $details </span>";
            }
        }
    }

    public function getLibUserDetails($lib_user_id)
    {
        $lib_user = LibUser::where('user_id', $lib_user_id)->first();
        if ($lib_user == null) {
            echo "<span style='color: red'>Error: Invalid User ID </span>";
        } else {
            $details = $lib_user->name . ', ' . $lib_user->user_id;
            echo "<span style='color: #5856ff'> $details </span>";
        }
    }

    public function searchBooks(Request $request)
    {
        $data_list = BookRepository::searchResult($request);

        foreach($data_list as $data){
            $disabled = '';
            if($data->currentStatus() == 'issued'){
                $disabled = 'disabled';
            }
            echo "<tr><td><input type='radio' name='book_id' value='$data->id' $disabled></td><td>$data->id</td><td>$data->isbn</td><td>$data->title</td><td>$data->author_details</td></tr>";
        }
    }
}
