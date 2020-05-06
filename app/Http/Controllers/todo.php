<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Data;

class todo extends Controller
{
    public function Todo(Request $request){
      
        return view("data");
    }

    // get the date from form in the function era

    public function getData(Request $request){
        $post = new Data();
        $post->data = $request->data;
        $post->save();
        return back();
    }

    public function editData($id) {
      $data = Data::find($id);
      $ids = $data->id;
      $item = $data->data;
      return view("edit_todo",['id' => $ids, 'item'=>$item]);
    }

    public function editsaveData(Request $request,$id){
      $input = $request->data;
      $main = Data::where('id',$id)->update(['data'=>$input]);
      return redirect("/todo");
    }

    public function deleteData($id){
      $data = Data::where('id',$id)->delete(['id'=>$id]);
      return redirect("/todo");
    }


    public function statusData($id, $status){
      if($status == "approve"){
        Data::where("id", $id)->update(["status" => "disapprove"]);
      }else{
        Data::where("id", $id)->update(["status" => "approve"]);
      }
      return redirect("/todo");
    }


}
