@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="https://static.toiimg.com/thumb/msid-67586673,width-800,height-600,resizemode-75,imgsize-3918697,pt-32,y_pad-40/67586673.jpg" class="rounded-circle" width="170px" height="110px">
        </div>
        <div class="col-9 pt-4" >
            <div><h1>{{ $user -> username }}</h1></div>
            <div class="d-flex">
                <div class="pr-5"><strong>153</strong> posts</div>
                <div class="pr-5"><strong>21k</strong> followers</div>
                <div class="pr-5"><strong>109</strong> following</div>        
            </div>
            <div class="pt-4 font-weight-bold">lala.org</div>
            <div>
                The thing is cat is very beautiful crature. 
                But cats can be deadly too. They can kill you 
                in your sleep. They can sneak into your bedroom
                and cut your throt. Cat has nine lives.
            </div>
            <div><a href="#">www.lala.org</a></div>
        </div>
    </div>

    <div class="row pt-5">
        <div class="col-4">
            <img src="https://instagram.fdac15-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/s640x640/117340491_169386454714695_5588459756451191993_n.jpg?_nc_ht=instagram.fdac15-1.fna.fbcdn.net&_nc_cat=1&_nc_ohc=cGTIS30tq3gAX9Gl6oh&oh=c1249ce396c694b23590cd362eafaaac&oe=5F5F6226" class="w-100">
        </div>
        <div class="col-4 pb-4">
            <img src="https://instagram.fdac15-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/c0.135.1080.1080a/s640x640/117251745_656670048537366_8675463061776597852_n.jpg?_nc_ht=instagram.fdac15-1.fna.fbcdn.net&_nc_cat=106&_nc_ohc=4b3fDJlFfyUAX8zGVCY&oh=55ca57b0f256c2968f2ce58e47bfbb8b&oe=5F6044CB" class="w-100">
        </div>
        <div class="col-4 pb-4">
            <img src="https://instagram.fdac15-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/c0.135.1080.1080a/s640x640/116971833_3391112427619928_5207129684691584226_n.jpg?_nc_ht=instagram.fdac15-1.fna.fbcdn.net&_nc_cat=108&_nc_ohc=aK-ArgV36DoAX-1Lv8G&oh=73e6de956a5a6ae1a7d6c6fd42b374cb&oe=5F61D43D" class="w-100">
        </div>
        <div class="col-4 pb-4">
            <img src="https://instagram.fdac15-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/s640x640/116636522_760305134741503_2724785188443047180_n.jpg?_nc_ht=instagram.fdac15-1.fna.fbcdn.net&_nc_cat=107&_nc_ohc=Ltzh1Cp_OaMAX8CG7JN&oh=3683c9a871f0c2d4e00478cdc4040fac&oe=5F5E7A94" class="w-100">
        </div>
        <div class="col-4">
            <img src="https://instagram.fdac15-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/c0.135.1080.1080a/s640x640/116971833_3391112427619928_5207129684691584226_n.jpg?_nc_ht=instagram.fdac15-1.fna.fbcdn.net&_nc_cat=108&_nc_ohc=aK-ArgV36DoAX-1Lv8G&oh=73e6de956a5a6ae1a7d6c6fd42b374cb&oe=5F61D43D" class="w-100">
        </div>
        <div class="col-4">
            <img src="https://instagram.fdac15-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/c0.135.1080.1080a/s640x640/116568585_148519993524992_5526787941354986528_n.jpg?_nc_ht=instagram.fdac15-1.fna.fbcdn.net&_nc_cat=108&_nc_ohc=M3Twft0YS1MAX_wbxse&oh=b767992896ac9cf3e8dc190e9f84d78d&oe=5F607031" class="w-100">
        </div>
    </div>
</div>
@endsection
