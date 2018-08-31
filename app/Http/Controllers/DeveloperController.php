<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Language;
use App\Programming_language;
use App\Developer;
use DB;

class DeveloperController extends Controller
{
    //showing all the developers
    public function index(){
        $developers = Developer::orderBy('id','desc')->paginate(25);
        /*dd($developers);*/

        return view('developerIndex',compact('developers'));
    }

    //showing create page
    public function create(){
        $languages=  Language::all();
        $programminglanguages= Programming_language::all();
        return view('create',compact('languages','programminglanguages'));
    }
    //storing in database
    public function store(Request $request){

        //validation
        $this->validate($request,[
            'email' => 'required',
        ]);

        //storing in database post
        $developer = new Developer();
        $developer->email= $request->input('email');
        $developer->save();
        $developer->language()->attach($request->input('language'));
        $developer->programming_language()->attach($request->input('programminglanguage'));
        return redirect('/');
    }

    //showing both search page
    public function searchPage(){
        return view('developer.searchPage');
    }

    //showing programming search page
    public function searchByProgramming(){
        $programminglanguages= Programming_language::all();
        return view('developer.searchByProgramming',compact('programminglanguages'));
    }

    //search for programming language developer
    public function searchForProgramming(Request $request){
        $programingLanguage = $request->input('programminglanguage');
        $pro = Programming_language::find($programingLanguage);

        $results = DB::table('developer_programming_language')
            ->where('programming_language_id', $programingLanguage)
            ->get();

        $developers = array();
        foreach ($results as $result){
           $developer = Developer::find($result->developer_id);
            $developers[] = $developer;
        }
        /*return $developers;*/
        /*$developers = DB::table('developers')
            ->join('developer_programming_language', 'developers.id', '=', 'developer_programming_language.developer_id')
            ->where('programming_language_id', '=', $programingLanguage)
            ->get();
        return $developers;*/
      return view('developer.showProgrammingDevelopers',compact('developers','pro'));
    }

    //showing both language search page
    public function searchByBoth(){
        $languages=  Language::all();
        $programminglanguages= Programming_language::all();
        return view('developer.searchByBoth',compact('languages','programminglanguages'));
    }

    //search for both language developer
    public function searchForBoth(Request $request){
        $programingLanguage = $request->input('programminglanguage');
        $language = $request->input('language');
        $pro = Programming_language::find($programingLanguage);
        $lan = Language::find($language);
        //programming language part
        $result1 = DB::table('developer_programming_language')
            ->where('programming_language_id', $programingLanguage)
            ->get();
        $developer1 = array();
        foreach ($result1 as $result){
            $developer = Developer::find($result->developer_id);
            $developer1[] = $developer;
        }
         //language part
        $result2 = DB::table('developer_language')
            ->where('language_id', $language)
            ->get();
        $developer2 = array();
        foreach ($result2 as $result){
            $developer = Developer::find($result->developer_id);
            $developer2[] = $developer;
        }
        $developers = array_intersect($developer1, $developer2);

        return view('developer.showBothLanDeveloper',compact('developers','pro','lan'));
    }

    //for top bar search
    public function query(Request $request){
        // Gets the query string from our form submission
        $query = $request->input('search');;
        // Returns an array of articles that have the query string located somewhere within
        // our articles titles. Paginates them so we can break up lots of search results.
        $programming =Programming_language::where('name', $query)->first();
        $pro= $programming->id;
        $results = DB::table('developer_programming_language')
            ->where('programming_language_id', $pro)
            ->get();

        $developers = array();
        foreach ($results as $result){
            $developer = Developer::find($result->developer_id);
            $developers[] = $developer;
        }
        $pro= Programming_language::find($pro);
        return view('developer.showProgrammingDevelopers',compact('developers','pro'));
    }
}
