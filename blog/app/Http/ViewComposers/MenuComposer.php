<?php 
namespace App\Http\ViewComposers;
/**
* 
*/
use Illuminate\View\View;
use App\Category;
class MenuComposer
{
	public function compose(View $view)
    {
    	$cateMenu = Category::where('is_menu', 1)->get();
        $view->with(compact('cateMenu'));
    }
	
}

 ?>