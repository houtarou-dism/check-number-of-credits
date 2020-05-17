@extends('layouts.layout')

@section('content')
    @error('selectYear')
    @include('alert.fail_alert', ['message' => $message])
    @enderror
    <main class="select-year-position">
        <div class="select-year-content">
            <form action="{{ route('select_year') }}" method="POST">
                @csrf
                <label for="year-select" class="mb-3 select-year-title">学年を選択してください。</label>
                <div class="mb-5 select-year-option">
                    <select id="year-select" class="select-year" name="selectYear" required autofocus>
                        <option value="">ーー 選択する ーー</option>
                        <option value="freshman">大学１年生</option>
                        <option value="sophomore">大学２年生</option>
                        <option value="junior">大学３年生</option>
                        <option value="senior">大学４年生</option>
                    </select>
                    <img id="year-select" class="down-arrow" src="{{ asset('images/chevron-down-solid.svg') }}" alt="Arrow Icon" aria-hidden="true">
                </div>
                <button type="submit" id="submit-btn" class="btn btn-secondary submit-btn">送信</button>
            </form>
        </div>
    </main>
@endsection
