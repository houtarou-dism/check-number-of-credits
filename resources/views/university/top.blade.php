@extends('layouts.layout')

@section('content')
    @error('selectYear')
    @include('alert.fail_alert', ['message' => $message])
    @enderror
    @if(@Session::has('message'))
        @include('alert.fail_alert', ['message' => session('message')])
    @endif
    <div class="modal fade result-dialog" id="confirmationScreen" tabindex="-1" role="dialog" aria-labelledby="confirmationScreenTitle" aria-hidden="true" style="display: none;">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="text-center dialog-header">
                    <h3 class="mb-0 fo-wei">このアプリについて</h3>
                </div>
                <div class="p-3">
                    <p>
                        　このアプリは単位数をチェックするアプリです。学年を選択することで、選択された学年までに修得しておく必要がある単位数を満たしているのかや、
                        必修科目を修得しているか確認することができます。
                    </p>
                    <p>
                        <span style="color: #e01616">※このアプリの進級条件や卒業要件は、福岡工業大学 平成２９年度（２０１７ 年度）を参考にしています。</span>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <main class="select-year-position">
        <div class="select-year-content">
            <form action="{{ route('select_year') }}" method="POST">
                @csrf
                <label for="year-select" class="mb-3 select-year-title">学年を選択してください。
                    <div class="d-inline-block">
                        <a id="confirmation-freshman-submit-button" class="d-inline-block text-center" role="button" data-toggle="modal" href="#confirmationScreen">
                            <i class="fas fa-question-circle icon-color-purple i-s-18 popover-help-result"></i>
                        </a>
                    </div>
                </label>
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
                <button type="submit" id="select-submit-btn" class="btn btn-secondary w-100">送信</button>
            </form>
        </div>
    </main>
    <footer class="select-year-footer">
        <div class="text-center mt-3">
            <p>© 2020 houtarou.</p>
        </div>
    </footer>
@endsection
