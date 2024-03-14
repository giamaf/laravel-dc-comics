@extends('layouts.main')

@section('title', 'Add New')



{{-- Main --}}
@section('main')
@section('section-id', 'add-comic')

<div class="container">
    <form class="row g-3 py-5">

        {{-- Title --}}
        <div class="col-md-6">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Es: Avengers">
        </div>

        {{-- Series --}}
        <div class="col-md-6">
            <label for="series" class="form-label">Series</label>
            <input type="text" class="form-control" id="series" name="series" placeholder="Es: Marvel Comics">
        </div>

        {{-- Description --}}
        <div class="col-md-12">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description" placeholder="Comics description..." rows="3"></textarea>
        </div>

        {{-- Thumb --}}
        <div class="col-12">
            <label for="thumb" class="form-label">Comic Thumb</label>
            <input type="text" class="form-control" id="thumb" name="thumb" placeholder="Insert a valid url">
        </div>

        {{-- Price --}}
        <div class="col-6">
            <label for="price" class="form-label">Price</label>
            <input type="number" class="form-control" id="price" name="price" min="1" max="1000"
                step="0.1">
        </div>

        {{-- Type --}}
        <div class="col-md-6">
            <label for="type" class="form-label">Type</label>
            <select id="type" name="type" class="form-select">
                <option selected disabled></option>
                <option value="comic-book">Comic Book</option>
                <option value="graphic-novel">Graphic Novel</option>
            </select>
        </div>

        {{-- Artists --}}
        <div class="col-md-4">
            <label for="artists" class="form-label">Artists</label>
            <input type="text" class="form-control" id="artists" name="artists" placeholder="Es: Stan Lee">
        </div>

        {{-- Writers --}}
        <div class="col-md-4">
            <label for="writers" class="form-label">Writers</label>
            <input type="text" class="form-control" id="writers" name="writers" placeholder="Es: Roy Thomas">
        </div>

        {{-- Add Button --}}
        <div class="col-12">
            <button type="reset" class="btn btn-secondary px-4">Clear</button>
            <button type="submit" class="btn btn-primary px-4">Add</button>
        </div>
    </form>
</div>

@endsection
