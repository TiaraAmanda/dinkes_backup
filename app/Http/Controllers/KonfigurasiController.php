<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bidang;
use App\Models\Profil;
use App\Models\Ppid;
use App\Models\User;
use App\Models\SosialMediaPopup;
use App\Models\Institusi;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;


class KonfigurasiController extends Controller
{
    public function datauser(){
        return view('admin.config.user', [
            'user' => User::all()
        ]);
    }

    public function editUser(User $user){

        return view('admin.config.edituser', [
            'user' => $user
        ]);
    }

    public function tambahUser(){
        return view('admin.config.adduser', [
            'user' => User::all()
        ]);
    }

    public function createUser(Request $request){

        $validatedData = $request->validate([
            'nama' => 'required|max:255',
            'username' => ['required', 'min:3', 'max:255', 'unique:user'],
            'email' => 'required|email|unique:user',
            'password' => 'required|min:5|max:255'
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        return redirect('/konfig/user')->with('success', 'New post has been added!');

    }

    public function hapusUser(User $user){

        User::destroy($user->id);
        return redirect('/konfig/user')->with('success', 'New post has been added!');
    }

    public function updateUser(Request $request, User $user)
    {
        $rules = [
            'nama' => '',
            'username' => '',
            'email' => '',
            'password' => ''
        ];

        $validatedData = $request->validate($rules);

        User::where('id', $user->id )->update($validatedData);

        return redirect('/konfigurasi/user')->with('success', 'New post has been added!');
    }


    public function databidang(){
        return view('admin.config.bidang', [
            'bidang' => Bidang::all()
        ]);
    }

    public function tambahBidang(){
        return view('admin.config.addbidang', [
            'bidang' => Bidang::all()
        ]);
    }

    public function createBidang(Request $request){

        $validatedData = $request->validate([
            'nama_bidang' => 'required',
            'slug' => 'required'
        ]);

        Bidang::create($validatedData);

        return redirect('/konfig/bidang')->with('success', 'New post has been added!');

    }

    public function hapusBidang(Bidang $bidang){

        Bidang::destroy($bidang->id);
        return redirect('/konfig/bidang')->with('success', 'New post has been added!');
    }


    public function sosialmedia(){
        return view('admin.config.sosialmedia', [
            'sosial_media' => SosialMediaPopup::all()
        ]);
    }

    public function createSm(Request $request){

        $validatedData = $request->validate([
            'nama_sosial_media' => 'required',
            'hyperlink' => '',
            'image' => 'image|file|max:255'
        ]);

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('post-images');
        }

        SosialMediaPopup::create($validatedData);

        return redirect('/konfig/sosial-media')->with('success', 'New post has been added!');

    }

    public function hapusSm(SosialMediaPopup $sosial_media){

        SosialMediaPopup::destroy($sosial_media->id);

        return redirect('/konfig/sosial-media')->with('success', 'New post has been added!');
    }

    public function popup(){

        $popup = DB::table('sosial_media_popup')->where('nama_sosial_media', 'like', 'popup')->get();

        return view('admin.config.popup', [
            'popup' => SosialMediaPopup::all()
        ])->with('popup', $popup);

    }

    public function createPopup(Request $request){

        $validatedData = $request->validate([
            'nama_sosial_media' => 'required',
            'hyperlink' => '',
            'image' => 'image|file|max:255'
        ]);

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('post-images');
        }

        SosialMediaPopup::create($validatedData);

        return redirect('/konfig/popup')->with('success', 'New post has been added!');

    }

    public function editPopup()
    {
        $popup = DB::table('sosial_media_popup')->where('nama_sosial_media', 'like', 'popup')->get();

        return view('admin.config.popup', [
            'popup' => SosialMediaPopup::all()
        ])->with('popup', $popup);

    }

    public function updatePopup(Request $request, SosialMediaPopup $sosial_media)
    {
        $rules = [
            'nama_sosial_media' => 'required',
            'hyperlink' => '',
            'image' => 'image|file|max:255'
        ];

        $validatedData = $request->validate($rules);

        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('post-images');
        }

        SosialMediaPopup::where('nama_sosial_media', 'like', 'popup')->update($validatedData);

        return redirect('/konfig/popup')->with('success', 'New post has been added!');
        }


    public function gantipassword(){
        return view('admin.config.gantipassword');
    }

    public function ubahpassword(Request $request){

        if (!(Hash::check($request->get('current-password'), auth()->user()->password))) {
            return redirect()->back()->with("error","Your current password does not matches with the password.");
        }

        $validatedData = $request->validate([
            'current-password' => 'required',
            'new-password' => 'required|string|min:8|confirmed',
        ]);


        $user = Auth::user();
        $user->password = bcrypt($request->get('new-password'));
        $user->save();

        return redirect()->back()->with("success","Password successfully changed!");

    }

}
