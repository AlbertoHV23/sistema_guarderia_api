@extends('layout.Front.main')
@section('pagetitle', 'Inicio')

@section('stylespage')
@endsection

@section('content')

@endsection

@section('scripts-page')
<script>
    const doc = document;
const menuOpen = doc.querySelector(".menu");
const menuClose = doc.querySelector(".close");
const overlay = doc.querySelector(".overlay");

menuOpen.addEventListener("click", () => {
  overlay.classList.add("overlay--active");
});

menuClose.addEventListener("click", () => {
  overlay.classList.remove("overlay--active");
});

</script>

@endsection