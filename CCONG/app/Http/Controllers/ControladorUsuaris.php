<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuari;

class ControladorUsuaris extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuari = Usuari::all();
        return view('indexUs', compact('usuari'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('registrar');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nouUsuari = $request->validate([
            'nom' => 'required|max:255',
            'email' => 'required|max:255',
            'contrasenya' => 'required|max:255',
            'admin' => 'required|max:255',
        ]);
        $usuari = Usuari::create($nouUsuari);
        return redirect('/')->with('completed', 'Usuari creat!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $usuari = Usuari::findOrFail($id);
        return view('actualitzaUs', compact('usuari'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $dades = $request->validate([
            'nom' => 'required|max:255',
            'email' => 'required|max:255',
            'contrasenya' => 'required|max:255',
        ]);
        Usuari::whereId($id)->update($dades);        
        return redirect('/usuaris')->with('completed', 'Usuari actualitzat!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $usuari = Usuari::findOrFail($id);
        $usuari->delete();

        return redirect('/')->with('completed', 'Usuari esborrat');

    }

    public function loginUs(Request $request){
        $dades = $request->validate([
            'nom' => 'required|max:255',
            'contrasenya' => 'required|max:255',
            'admin' => 'required|max:255',
        ]);

        Usuari::whereNom($dades['nom'])->whereContrasenya($dades['contrasenya'])->whereAdmin($dades['admin'])->findOrFail();

        return redirect('/users')->with('completed', 'Usuari trobat');

    }

    public function loginAd(Request $request){
        $dades = $request->validate([
            'nom' => 'required|max:255',
            'contrasenya' => 'required|max:255',
            'admin' => 'required|max:255',
        ]);

        Usuari::findOrFail($dades);

        return redirect('/admin')->with('completed', 'Usuari trobat');

    }
}
