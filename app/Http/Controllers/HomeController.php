<?php
declare(strict_types=1);

namespace App\Http\Controllers;

use App\Services\Contracts\CharactersService;

class HomeController extends Controller
{
    /**
     * @var CharactersService
     */
    private $service;

    /**
     * Create a new controller instance.
     *
     * @param CharactersService $service
     */
    public function __construct(CharactersService $service)
    {
        $this->middleware('auth');
        $this->service = $service;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home', ['characters' => $this->service->all()]);
    }
}
