@extends('layouts.app')

@section('title', 'Detail Groups')

@section('content')
<div class="card border-success" style="max-width: 20rem;">
<div class="card-body text-secondary">

    <h5>Jumlah Anggota Sekarang : {{$group['jml_member']}}</h5>
    <h5>Anggota yang pernah masuk : {{ $group['jml_masuk'] }}</h5>
    <h5>Anggota yang keluar : {{ $group['jml_keluar'] }}</h5>

</div>
</div>
@endsection