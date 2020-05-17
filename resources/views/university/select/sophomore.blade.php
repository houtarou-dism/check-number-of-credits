@extends('layouts.layout')

@section('content')
    <main class="freshman-position">
        <div class="text-center">
            <p class="d-inline-block freshman-title">大学２年次</p>
            <div class="d-inline-block dialog-popover">
                <i class="fas fa-question-circle icon-color-purple ml-2 i-s-20 popover-help"
                   tabindex="0" role="button" data-toggle="popover" data-trigger="focus"
                   data-container="body" data-placement="bottom" data-html="true"
                   data-content="単位を取得した科目にチェックを付けてください">
                </i>
            </div>
        </div>
        <form action="{{ route('freshman') }}" method="POST">
            <div class="d-flex justify-content-center freshman-content-position">
                <div class="text-center freshman-content">
                    @csrf
                    <div class="field-title">
                        <p class="mb-0 f-s-25">教養教育科目</p>
                    </div>
                    <div class="custom-control custom-checkbox text-left ml-3 mb-5">
                        <input type="checkbox" id="lae-cb-a" class="custom-control-input custom-checkbox-point" name="">
                        <label class="custom-control-label u-font-size-90 custom-checkbox-point" for="lae-cb-a">近代経済学</label>
                    </div>
                    <div class="custom-control custom-checkbox text-left ml-3 mb-5">
                        <input type="checkbox" id="lae-cb-b" class="custom-control-input custom-checkbox-point" name="">
                        <label class="custom-control-label u-font-size-90 custom-checkbox-point" for="lae-cb-b">日本国憲法</label>
                    </div>
                    <div class="custom-control custom-checkbox text-left ml-3 mb-5">
                        <input type="checkbox" id="lae-cb-c" class="custom-control-input custom-checkbox-point" name="">
                        <label class="custom-control-label u-font-size-90 custom-checkbox-point" for="lae-cb-c">大衆社会論</label>
                    </div>
                    <div class="custom-control custom-checkbox text-left ml-3 mb-5">
                        <input type="checkbox" id="lae-cb-d" class="custom-control-input custom-checkbox-point" name="">
                        <label class="custom-control-label u-font-size-90 custom-checkbox-point" for="lae-cb-d">物質と化学</label>
                    </div>
                    <div class="custom-control custom-checkbox text-left ml-3 mb-5">
                        <input type="checkbox" id="lae-cb-e" class="custom-control-input custom-checkbox-point" name="">
                        <label class="custom-control-label u-font-size-90 custom-checkbox-point" for="lae-cb-e">健康科学</label>
                    </div>
                    <div class="custom-control custom-checkbox text-left ml-3 mb-5">
                        <input type="checkbox" id="lae-cb-f" class="custom-control-input custom-checkbox-point" name="">
                        <label class="custom-control-label u-font-size-90 custom-checkbox-point" for="lae-cb-f">日本近代思想史</label>
                    </div>
                    <div class="custom-control custom-checkbox text-left ml-3 mb-5">
                        <input type="checkbox" id="lae-cb-g" class="custom-control-input custom-checkbox-point" name="">
                        <label class="custom-control-label u-font-size-90 custom-checkbox-point" for="lae-cb-g">生命と生態系</label>
                    </div>
                </div>
                <div class="text-center freshman-content">
                    <div class="field-title">
                        <p class="mb-0 f-s-25">スキル教育科目</p>
                    </div>
                    <div class="custom-control custom-checkbox text-left ml-3 mb-5">
                        <input type="checkbox" id="st-cb-a" class="custom-control-input custom-checkbox-point" name="">
                        <label class="custom-control-label u-font-size-90 custom-checkbox-point" for="st-cb-a">Advanced English C</label>
                    </div>
                    <div class="custom-control custom-checkbox text-left ml-3 mb-5">
                        <input type="checkbox" id="st-cb-b" class="custom-control-input custom-checkbox-point" name="">
                        <label class="custom-control-label u-font-size-90 custom-checkbox-point" for="st-cb-b">English C</label>
                    </div>
                    <div class="custom-control custom-checkbox text-left ml-3 mb-5">
                        <input type="checkbox" id="st-cb-c" class="custom-control-input custom-checkbox-point" name="">
                        <label class="custom-control-label u-font-size-90 custom-checkbox-point" for="st-cb-c">就業実習</label>
                    </div>
                    <div class="custom-control custom-checkbox text-left ml-3 mb-5">
                        <input type="checkbox" id="st-cb-d" class="custom-control-input custom-checkbox-point" name="">
                        <label class="custom-control-label u-font-size-90 custom-checkbox-point" for="st-cb-d">Advanced English D</label>
                    </div>
                    <div class="custom-control custom-checkbox text-left ml-3 mb-5">
                        <input type="checkbox" id="st-cb-e" class="custom-control-input custom-checkbox-point" name="">
                        <label class="custom-control-label u-font-size-90 custom-checkbox-point" for="st-cb-e">English D</label>
                    </div>
                </div>
                <div class="text-center freshman-content">
                    <div class="field-title">
                        <p class="mb-0 f-s-25">専門基礎科目</p>
                    </div>
                    <div class="custom-control custom-checkbox text-left ml-3 mb-5">
                        <input type="checkbox" id="sf-cb-a" class="custom-control-input custom-checkbox-point" name="">
                        <label class="custom-control-label u-font-size-90 custom-checkbox-point" for="sf-cb-a">物理学Ⅱ</label>
                    </div>
                    <div class="custom-control custom-checkbox text-left ml-3 mb-5">
                        <input type="checkbox" id="sf-cb-b" class="custom-control-input custom-checkbox-point" name="">
                        <label class="custom-control-label u-font-size-90 custom-checkbox-point" for="sf-cb-b">線形代数Ⅲ</label>
                    </div>
                    <div class="custom-control custom-checkbox text-left ml-3 mb-5">
                        <input type="checkbox" id="sf-cb-c" class="custom-control-input custom-checkbox-point" name="">
                        <label class="custom-control-label u-font-size-90 custom-checkbox-point" for="sf-cb-c">解析Ⅲ</label>
                    </div>
                    <div class="custom-control custom-checkbox text-left ml-3 mb-5">
                        <input type="checkbox" id="sf-cb-d" class="custom-control-input custom-checkbox-point" name="">
                        <label class="custom-control-label u-font-size-90 custom-checkbox-point" for="sf-cb-d">情報物理学</label>
                    </div>
                    <div class="custom-control custom-checkbox text-left ml-3 mb-5">
                        <input type="checkbox" id="sf-cb-e" class="custom-control-input custom-checkbox-point" name="">
                        <label class="custom-control-label u-font-size-90 custom-checkbox-point" for="sf-cb-e">幾何学的情報数学</label>
                    </div>
                    <div class="custom-control custom-checkbox text-left ml-3 mb-5">
                        <input type="checkbox" id="sf-cb-f" class="custom-control-input custom-checkbox-point" name="">
                        <label class="custom-control-label u-font-size-90 custom-checkbox-point" for="sf-cb-f">微分方程式</label>
                    </div>
                </div>
                <div class="text-center freshman-content">
                    <div class="field-title">
                        <p class="mb-0 f-s-25">専門教育科目</p>
                    </div>
                    <div class="custom-control custom-checkbox text-left ml-3 mb-5">
                        <input type="checkbox" id="se-cb-a" class="custom-control-input custom-checkbox-point" name="">
                        <label class="custom-control-label u-font-size-90 custom-checkbox-point" for="se-cb-a">確率統計論</label>
                    </div>
                    <div class="custom-control custom-checkbox text-left ml-3 mb-5">
                        <input type="checkbox" id="se-cb-b" class="custom-control-input custom-checkbox-point" name="">
                        <label class="custom-control-label u-font-size-90 custom-checkbox-point" for="se-cb-b">オートマトンと形式言語</label>
                    </div>
                    <div class="custom-control custom-checkbox text-left ml-3 mb-5">
                        <input type="checkbox" id="se-cb-c" class="custom-control-input custom-checkbox-point" name="">
                        <label class="custom-control-label u-font-size-90 custom-checkbox-point" for="se-cb-c">人工知能プログラミング</label>
                    </div>
                    <div class="custom-control custom-checkbox text-left ml-3 mb-5">
                        <input type="checkbox" id="se-cb-d" class="custom-control-input custom-checkbox-point" name="">
                        <label class="custom-control-label u-font-size-90 custom-checkbox-point" for="se-cb-d">JAVAプログラミングⅠ</label>
                    </div>
                    <div class="custom-control custom-checkbox text-left ml-3 mb-5">
                        <input type="checkbox" id="se-cb-e" class="custom-control-input custom-checkbox-point" name="">
                        <label class="custom-control-label u-font-size-90 custom-checkbox-point" for="se-cb-e">オペレーティングシステム</label>
                    </div>
                    <div class="custom-control custom-checkbox text-left ml-3 mb-5">
                        <input type="checkbox" id="se-cb-f" class="custom-control-input custom-checkbox-point" name="">
                        <label class="custom-control-label u-font-size-90 custom-checkbox-point" for="se-cb-f">電子回路</label>
                    </div>
                    <div class="custom-control custom-checkbox text-left ml-3 mb-5">
                        <input type="checkbox" id="se-cb-g" class="custom-control-input custom-checkbox-point" name="">
                        <label class="custom-control-label u-font-size-90 custom-checkbox-point" for="se-cb-g">論理回路</label>
                    </div>
                    <div class="custom-control custom-checkbox text-left ml-3 mb-5">
                        <input type="checkbox" id="se-cb-h" class="custom-control-input custom-checkbox-point" name="">
                        <label class="custom-control-label u-font-size-90 custom-checkbox-point" for="se-cb-h">コンピュータアーキテクチャⅡ</label>
                    </div>
                    <div class="custom-control custom-checkbox text-left ml-3 mb-5">
                        <input type="checkbox" id="se-cb-i" class="custom-control-input custom-checkbox-point" name="">
                        <label class="custom-control-label u-font-size-90 custom-checkbox-point" for="se-cb-i">情報工学実験Ⅰ</label>
                    </div>
                    <div class="custom-control custom-checkbox text-left ml-3 mb-5">
                        <input type="checkbox" id="se-cb-j" class="custom-control-input custom-checkbox-point" name="">
                        <label class="custom-control-label u-font-size-90 custom-checkbox-point" for="se-cb-j">データベース</label>
                    </div>
                    <div class="custom-control custom-checkbox text-left ml-3 mb-5">
                        <input type="checkbox" id="se-cb-k" class="custom-control-input custom-checkbox-point" name="">
                        <label class="custom-control-label u-font-size-90 custom-checkbox-point" for="se-cb-k">数値計算</label>
                    </div>
                    <div class="custom-control custom-checkbox text-left ml-3 mb-5">
                        <input type="checkbox" id="se-cb-l" class="custom-control-input custom-checkbox-point" name="">
                        <label class="custom-control-label u-font-size-90 custom-checkbox-point" for="se-cb-l">JAVAプログラミングⅡ</label>
                    </div>
                    <div class="custom-control custom-checkbox text-left ml-3 mb-5">
                        <input type="checkbox" id="se-cb-m" class="custom-control-input custom-checkbox-point" name="">
                        <label class="custom-control-label u-font-size-90 custom-checkbox-point" for="se-cb-m">データ構造とアルゴリズム</label>
                    </div>
                    <div class="custom-control custom-checkbox text-left ml-3 mb-5">
                        <input type="checkbox" id="se-cb-n" class="custom-control-input custom-checkbox-point" name="">
                        <label class="custom-control-label u-font-size-90 custom-checkbox-point" for="se-cb-n">論理設計</label>
                    </div>
                    <div class="custom-control custom-checkbox text-left ml-3 mb-5">
                        <input type="checkbox" id="se-cb-o" class="custom-control-input custom-checkbox-point" name="">
                        <label class="custom-control-label u-font-size-90 custom-checkbox-point" for="se-cb-o">情報機器工学</label>
                    </div>
                    <div class="custom-control custom-checkbox text-left ml-3 mb-5">
                        <input type="checkbox" id="se-cb-p" class="custom-control-input custom-checkbox-point" name="">
                        <label class="custom-control-label u-font-size-90 custom-checkbox-point" for="se-cb-p">情報工学実験Ⅱ</label>
                    </div>
                    <div class="custom-control custom-checkbox text-left ml-3 mb-5">
                        <input type="checkbox" id="se-cb-q" class="custom-control-input custom-checkbox-point" name="">
                        <label class="custom-control-label u-font-size-90 custom-checkbox-point" for="se-cb-q">自然言語処理</label>
                    </div>
                    <div class="custom-control custom-checkbox text-left ml-3 mb-5">
                        <input type="checkbox" id="se-cb-r" class="custom-control-input custom-checkbox-point" name="">
                        <label class="custom-control-label u-font-size-90 custom-checkbox-point" for="se-cb-r">コンピュータグラフィックス</label>
                    </div>
                    <div class="custom-control custom-checkbox text-left ml-3 mb-5">
                        <input type="checkbox" id="se-cb-s" class="custom-control-input custom-checkbox-point" name="">
                        <label class="custom-control-label u-font-size-90 custom-checkbox-point" for="se-cb-s">人工知能応用</label>
                    </div>
                    <div class="custom-control custom-checkbox text-left ml-3 mb-5">
                        <input type="checkbox" id="se-cb-t" class="custom-control-input custom-checkbox-point" name="">
                        <label class="custom-control-label u-font-size-90 custom-checkbox-point" for="se-cb-t">プロジェクト型演習Ⅰ</label>
                    </div>
                    <div class="custom-control custom-checkbox text-left ml-3 mb-5">
                        <input type="checkbox" id="se-cb-u" class="custom-control-input custom-checkbox-point" name="">
                        <label class="custom-control-label u-font-size-90 custom-checkbox-point" for="se-cb-u">情報技術資格Ⅰ</label>
                    </div>
                </div>
            </div>
        </form>
    </main>
@endsection
