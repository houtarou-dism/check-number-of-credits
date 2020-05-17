@extends('layouts.layout')

@section('content')
    <main class="freshman-position">
        <div class="text-center">
            <p class="d-inline-block freshman-title">大学１年次</p>
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
                        <label class="custom-control-label u-font-size-90 custom-checkbox-point" for="lae-cb-a">九州学</label>
                    </div>
                    <div class="custom-control custom-checkbox text-left ml-3 mb-5">
                        <input type="checkbox" id="lae-cb-b" class="custom-control-input custom-checkbox-point" name="">
                        <label class="custom-control-label u-font-size-90 custom-checkbox-point" for="lae-cb-b">認知心理学</label>
                    </div>
                    <div class="custom-control custom-checkbox text-left ml-3 mb-5">
                        <input type="checkbox" id="lae-cb-c" class="custom-control-input custom-checkbox-point" name="">
                        <label class="custom-control-label u-font-size-90 custom-checkbox-point" for="lae-cb-c">文学</label>
                    </div>
                    <div class="custom-control custom-checkbox text-left ml-3 mb-5">
                        <input type="checkbox" id="lae-cb-d" class="custom-control-input custom-checkbox-point" name="">
                        <label class="custom-control-label u-font-size-90 custom-checkbox-point" for="lae-cb-d">海外事情</label>
                    </div>
                    <div class="custom-control custom-checkbox text-left ml-3 mb-5">
                        <input type="checkbox" id="lae-cb-e" class="custom-control-input custom-checkbox-point" name="">
                        <label class="custom-control-label u-font-size-90 custom-checkbox-point" for="lae-cb-e">日本事情Ⅰ</label>
                    </div>
                    <div class="custom-control custom-checkbox text-left ml-3 mb-5">
                        <input type="checkbox" id="lae-cb-f" class="custom-control-input custom-checkbox-point" name="">
                        <label class="custom-control-label u-font-size-90 custom-checkbox-point" for="lae-cb-f">コミュニケーション基礎</label>
                    </div>
                    <div class="custom-control custom-checkbox text-left ml-3 mb-5">
                        <input type="checkbox" id="lae-cb-g" class="custom-control-input custom-checkbox-point" name="">
                        <label class="custom-control-label u-font-size-90 custom-checkbox-point" for="lae-cb-g">経済と社会</label>
                    </div>
                    <div class="custom-control custom-checkbox text-left ml-3 mb-5">
                        <input type="checkbox" id="lae-cb-h" class="custom-control-input custom-checkbox-point" name="">
                        <label class="custom-control-label u-font-size-90 custom-checkbox-point" for="lae-cb-h">倫理学</label>
                    </div>
                    <div class="custom-control custom-checkbox text-left ml-3 mb-5">
                        <input type="checkbox" id="lae-cb-i" class="custom-control-input custom-checkbox-point" name="">
                        <label class="custom-control-label u-font-size-90 custom-checkbox-point" for="lae-cb-i">日常生活と法</label>
                    </div>
                    <div class="custom-control custom-checkbox text-left ml-3 mb-5">
                        <input type="checkbox" id="lae-cb-j" class="custom-control-input custom-checkbox-point" name="">
                        <label class="custom-control-label u-font-size-90 custom-checkbox-point" for="lae-cb-j">日本事情Ⅱ</label>
                    </div>
                    <div class="custom-control custom-checkbox text-left ml-3 mb-5">
                        <input type="checkbox" id="lae-cb-k" class="custom-control-input custom-checkbox-point" name="">
                        <label class="custom-control-label u-font-size-90 custom-checkbox-point" for="lae-cb-k">自然と科学</label>
                    </div>
                    <div class="custom-control custom-checkbox text-left ml-3 mb-5">
                        <input type="checkbox" id="lae-cb-l" class="custom-control-input custom-checkbox-point" name="">
                        <label class="custom-control-label u-font-size-90 custom-checkbox-point" for="lae-cb-l">地球と環境</label>
                    </div>
                    <div class="custom-control custom-checkbox text-left ml-3 mb-5">
                        <input type="checkbox" id="lae-cb-m" class="custom-control-input custom-checkbox-point" name="">
                        <label class="custom-control-label u-font-size-90 custom-checkbox-point" for="lae-cb-m">健康運動学</label>
                    </div>
                </div>
                <div class="text-center freshman-content">
                    <div class="field-title">
                        <p class="mb-0 f-s-25">スキル教育科目</p>
                    </div>
                    <div class="custom-control custom-checkbox text-left ml-3 mb-5">
                        <input type="checkbox" id="st-cb-a" class="custom-control-input custom-checkbox-point" name="">
                        <label class="custom-control-label u-font-size-90 custom-checkbox-point" for="st-cb-a">Advanced English A</label>
                    </div>
                    <div class="custom-control custom-checkbox text-left ml-3 mb-5">
                        <input type="checkbox" id="st-cb-b" class="custom-control-input custom-checkbox-point" name="">
                        <label class="custom-control-label u-font-size-90 custom-checkbox-point" for="st-cb-b">English A</label>
                    </div>
                    <div class="custom-control custom-checkbox text-left ml-3 mb-5">
                        <input type="checkbox" id="st-cb-c" class="custom-control-input custom-checkbox-point" name="">
                        <label class="custom-control-label u-font-size-90 custom-checkbox-point" for="st-cb-c">中国語Ⅰ</label>
                    </div>
                    <div class="custom-control custom-checkbox text-left ml-3 mb-5">
                        <input type="checkbox" id="st-cb-d" class="custom-control-input custom-checkbox-point" name="">
                        <label class="custom-control-label u-font-size-90 custom-checkbox-point" for="st-cb-d">韓国語Ⅰ</label>
                    </div>
                    <div class="custom-control custom-checkbox text-left ml-3 mb-5">
                        <input type="checkbox" id="st-cb-e" class="custom-control-input custom-checkbox-point" name="">
                        <label class="custom-control-label u-font-size-90 custom-checkbox-point" for="st-cb-e">日本語Ⅰ</label>
                    </div>
                    <div class="custom-control custom-checkbox text-left ml-3 mb-5">
                        <input type="checkbox" id="st-cb-f" class="custom-control-input custom-checkbox-point" name="">
                        <label class="custom-control-label u-font-size-90 custom-checkbox-point" for="st-cb-f">キャリア形成</label>
                    </div>
                    <div class="custom-control custom-checkbox text-left ml-3 mb-5">
                        <input type="checkbox" id="st-cb-g" class="custom-control-input custom-checkbox-point" name="">
                        <label class="custom-control-label u-font-size-90 custom-checkbox-point" for="st-cb-g">日本語表現</label>
                    </div>
                    <div class="custom-control custom-checkbox text-left ml-3 mb-5">
                        <input type="checkbox" id="st-cb-h" class="custom-control-input custom-checkbox-point" name="">
                        <label class="custom-control-label u-font-size-90 custom-checkbox-point" for="st-cb-h">Advanced English B</label>
                    </div>
                    <div class="custom-control custom-checkbox text-left ml-3 mb-5">
                        <input type="checkbox" id="st-cb-i" class="custom-control-input custom-checkbox-point" name="">
                        <label class="custom-control-label u-font-size-90 custom-checkbox-point" for="st-cb-i">English B</label>
                    </div>
                    <div class="custom-control custom-checkbox text-left ml-3 mb-5">
                        <input type="checkbox" id="st-cb-j" class="custom-control-input custom-checkbox-point" name="">
                        <label class="custom-control-label u-font-size-90 custom-checkbox-point" for="st-cb-j">中国語Ⅱ</label>
                    </div>
                    <div class="custom-control custom-checkbox text-left ml-3 mb-5">
                        <input type="checkbox" id="st-cb-k" class="custom-control-input custom-checkbox-point" name="">
                        <label class="custom-control-label u-font-size-90 custom-checkbox-point" for="st-cb-k">韓国語Ⅱ</label>
                    </div>
                    <div class="custom-control custom-checkbox text-left ml-3 mb-5">
                        <input type="checkbox" id="st-cb-l" class="custom-control-input custom-checkbox-point" name="">
                        <label class="custom-control-label u-font-size-90 custom-checkbox-point" for="st-cb-l">日本語Ⅱ</label>
                    </div>
                </div>
                <div class="text-center freshman-content">
                    <div class="field-title">
                        <p class="mb-0 f-s-25">専門基礎科目</p>
                    </div>
                    <div class="custom-control custom-checkbox text-left ml-3 mb-5">
                        <input type="checkbox" id="sf-cb-a" class="custom-control-input custom-checkbox-point" name="">
                        <label class="custom-control-label u-font-size-90 custom-checkbox-point" for="sf-cb-a">基礎物理学</label>
                    </div>
                    <div class="custom-control custom-checkbox text-left ml-3 mb-5">
                        <input type="checkbox" id="sf-cb-b" class="custom-control-input custom-checkbox-point" name="">
                        <label class="custom-control-label u-font-size-90 custom-checkbox-point" for="sf-cb-b">基礎電磁気学</label>
                    </div>
                    <div class="custom-control custom-checkbox text-left ml-3 mb-5">
                        <input type="checkbox" id="sf-cb-c" class="custom-control-input custom-checkbox-point" name="">
                        <label class="custom-control-label u-font-size-90 custom-checkbox-point" for="sf-cb-c">線形代数Ⅰ</label>
                    </div>
                    <div class="custom-control custom-checkbox text-left ml-3 mb-5">
                        <input type="checkbox" id="sf-cb-d" class="custom-control-input custom-checkbox-point" name="">
                        <label class="custom-control-label u-font-size-90 custom-checkbox-point" for="sf-cb-d">解析Ⅰ</label>
                    </div>
                    <div class="custom-control custom-checkbox text-left ml-3 mb-5">
                        <input type="checkbox" id="sf-cb-e" class="custom-control-input custom-checkbox-point" name="">
                        <label class="custom-control-label u-font-size-90 custom-checkbox-point" for="sf-cb-e">物理学Ⅰ</label>
                    </div>
                    <div class="custom-control custom-checkbox text-left ml-3 mb-5">
                        <input type="checkbox" id="sf-cb-f" class="custom-control-input custom-checkbox-point" name="">
                        <label class="custom-control-label u-font-size-90 custom-checkbox-point" for="sf-cb-f">線形代数Ⅱ</label>
                    </div>
                    <div class="custom-control custom-checkbox text-left ml-3 mb-5">
                        <input type="checkbox" id="sf-cb-g" class="custom-control-input custom-checkbox-point" name="">
                        <label class="custom-control-label u-font-size-90 custom-checkbox-point" for="sf-cb-g">解析Ⅱ</label>
                    </div>
                </div>
                <div class="text-center freshman-content">
                    <div class="field-title">
                        <p class="mb-0 f-s-25">専門教育科目</p>
                    </div>
                    <div class="custom-control custom-checkbox text-left ml-3 mb-5">
                        <input type="checkbox" id="se-cb-a" class="custom-control-input custom-checkbox-point" name="">
                        <label class="custom-control-label u-font-size-90 custom-checkbox-point" for="se-cb-a">情報基礎ゼミナール</label>
                    </div>
                    <div class="custom-control custom-checkbox text-left ml-3 mb-5">
                        <input type="checkbox" id="se-cb-b" class="custom-control-input custom-checkbox-point" name="">
                        <label class="custom-control-label u-font-size-90 custom-checkbox-point" for="se-cb-b">コンピュータ科学</label>
                    </div>
                    <div class="custom-control custom-checkbox text-left ml-3 mb-5">
                        <input type="checkbox" id="se-cb-c" class="custom-control-input custom-checkbox-point" name="">
                        <label class="custom-control-label u-font-size-90 custom-checkbox-point" for="se-cb-c">コンピュータリテラシー</label>
                    </div>
                    <div class="custom-control custom-checkbox text-left ml-3 mb-5">
                        <input type="checkbox" id="se-cb-d" class="custom-control-input custom-checkbox-point" name="">
                        <label class="custom-control-label u-font-size-90 custom-checkbox-point" for="se-cb-d">CプログラミングⅠ</label>
                    </div>
                    <div class="custom-control custom-checkbox text-left ml-3 mb-5">
                        <input type="checkbox" id="se-cb-e" class="custom-control-input custom-checkbox-point" name="">
                        <label class="custom-control-label u-font-size-90 custom-checkbox-point" for="se-cb-e">電気回路Ⅰ</label>
                    </div>
                    <div class="custom-control custom-checkbox text-left ml-3 mb-5">
                        <input type="checkbox" id="se-cb-f" class="custom-control-input custom-checkbox-point" name="">
                        <label class="custom-control-label u-font-size-90 custom-checkbox-point" for="se-cb-f">離散数学</label>
                    </div>
                    <div class="custom-control custom-checkbox text-left ml-3 mb-5">
                        <input type="checkbox" id="se-cb-g" class="custom-control-input custom-checkbox-point" name="">
                        <label class="custom-control-label u-font-size-90 custom-checkbox-point" for="se-cb-g">CプログラミングⅡ</label>
                    </div>
                    <div class="custom-control custom-checkbox text-left ml-3 mb-5">
                        <input type="checkbox" id="se-cb-h" class="custom-control-input custom-checkbox-point" name="">
                        <label class="custom-control-label u-font-size-90 custom-checkbox-point" for="se-cb-h">電気回路Ⅱ</label>
                    </div>
                    <div class="custom-control custom-checkbox text-left ml-3 mb-5">
                        <input type="checkbox" id="se-cb-i" class="custom-control-input custom-checkbox-point" name="">
                        <label class="custom-control-label u-font-size-90 custom-checkbox-point" for="se-cb-i">コンピュータアーキテクチャⅠ</label>
                    </div>
                    <div class="custom-control custom-checkbox text-left ml-3 mb-5">
                        <input type="checkbox" id="se-cb-j" class="custom-control-input custom-checkbox-point" name="">
                        <label class="custom-control-label u-font-size-90 custom-checkbox-point" for="se-cb-j">人工知能基礎</label>
                    </div>
                    <div class="custom-control custom-checkbox text-left ml-3 mb-5">
                        <input type="checkbox" id="se-cb-k" class="custom-control-input custom-checkbox-point" name="">
                        <label class="custom-control-label u-font-size-90 custom-checkbox-point" for="se-cb-k">マルチメディア工学</label>
                    </div>
                </div>
            </div>
        </form>
    </main>
@endsection
