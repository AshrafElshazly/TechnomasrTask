<?php 

namespace App\Http\Traits;

use App\Http\Requests\FeedbackPostRequest;
use Illuminate\Http\Request;

trait ImgTrait
{
    public function SaveImg(Request $request, $path)
    {
        $fileExtension = $request->photo->getClientOriginalExtension();
        $fileName      = time().'.'.$fileExtension;
        $request->photo->move($path,$fileName);
        
        return $fileName;
    }
}