<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Hero;
use App\Models\Testimoni;
use App\Models\Travel;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class LandingController extends Controller
{
    public function index()
    {
        $travels = Travel::with('category')->get();

        $heroes = Hero::all()->first();

        $testimonials = Testimoni::with('user')->get();

        // dd($testimonials);

        return view('landing', compact('travels', 'heroes', 'testimonials'));
    }

    public function show(Request $request)
    {
        // mengambil data category
        $categories = Category::all();

        $selectedCategory = $request->category;

        if ($selectedCategory) {
            $Travels = Travel::with('category')->whereHas('category', function ($query) use ($selectedCategory) {
                $query->where('name', $selectedCategory);
            })->get();
        } else {
            // mengambil 8 data produk secara acak
            $Travels = Travel::inRandomOrder()->get();
        }


        return view('frontend.page', compact('Travels', 'categories', 'selectedCategory'));
    }

    public function find(Request $request)
    {
        $searchTerm = $request->search;

        if ($searchTerm) {
            $Travels = Travel::with('category')
                ->where(function ($query) use ($searchTerm) {
                    $query->where('name', 'LIKE', "%$searchTerm%")
                        ->orWhereHas('category', function ($query) use ($searchTerm) {
                            $query->where('name', 'LIKE', "%$searchTerm%");
                        });
                })
                ->get(); // Pastikan memilih kolom yang diperlukan

            // dd($Travels);
        } else {
            // mengambil 8 data produk secara acak
            $Travels = Travel::inRandomOrder()->get();
        }

        return view('frontend.find', compact('Travels', 'searchTerm'));
    }


    public function detail($id)
    {
        $Travels = Travel::where('id', $id)->with('category')->first();

        $related = [];

        if ($Travels) {
            $related = Travel::where('category_id', $Travels->category->id)->inRandomOrder()->limit(4)->get();
        }

        if ($Travels) {
            return view('frontend.show', compact('Travels', 'related'));
        } else {
            abort(404);
        }
    }

    public function profile()
    {

        return view('frontend.profil');
    }

    public function create()
    {

        return view('frontend.createTestimoni');
    }

    public function store(Request $request)
    {
        // $validator = Validator::make($request->all(), [
        //     'deskripsi' => 'required',
        // ]);

        // if ($validator->fails()) {
        //     return redirect()->back()->withErrors($validator->errors())->withInput();
        // }

        $user = auth()->user();
        // dd($user, $request->all());

        $product = Testimoni::create([
            'user_id' => $user->id, // Tetapkan kategori secara eksplisit
            'deskripsi' => $request->input('testimonial'),
        ]);

        $userupdate = User::where('id', $user->id)->update([
            'status_testimoni' => '1',
        ]);

        return redirect()->route('login')->with('success', 'Testimoni ditambahkan');
    }
}
