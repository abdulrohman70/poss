<div class="container-fluid">
    <div class="page-title">
        <h4>Selamat Datang</h4>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="col-md-12">
                <div class="card border-info">
                    <div class="card-heading border bottom">
                        <h4 class="card-title">Mohon Isi Dengan Jujur</h4>
                    </div>
                    <div class="card-block border-danger">
                        <div class="row">
                            <div class="col-md-3">
                                <p class="mrg-top-10 text-dark"> <b>Nama Lengkap</b></p>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control bg-gray" id="nama" name="nama">
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-3">
                                <p class="mrg-top-10 text-dark"><b>Masukan Nomor Handphone</b></p>
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="no" id="no" class="form-control bg-gray">
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-3">
                                <p class="mrg-top-10 text-dark"><b>Masukan Satu Angka</b></p>
                            </div>
                            <div class="col-md-6">
                                <input type="text" id="angka" class="form-control bg-gray" name="angka">
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-3">
                                <p class="mrg-top-10 text-dark"><b>Masukan Tahun Kelahiran Anda</b></p>
                            </div>
                            <div class="col-md-6">
                                <input type="text" id="lahir" class="form-control bg-gray" name="lahir">
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-3">
                                <p class="mrg-top-10 text-dark"><b>Apakah Anda Sudah Berulang Tahun Ditahun Ini</b></p>
                            </div>
                            <div class="col-md-6">
                                <select name="ulang_tahun" id="ulang_tahun" class="form-control bg-gray">
                                    <option value="0">Belum</option>
                                    <option value="1">Sudah</option>
                                </select>
                            </div>
                        </div>
                        <hr>
                        <div class="row right">
                            <button type="submit" onclick="cerdas()" name="submit" class="btn btn-primary">Klik</button>       
                        </div>
                        <hr>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="umur">

</div>
<h1 class="center" id="headline">
    <a href="http://dvcs.w3.org/hg/speech-api/raw-file/tip/speechapi.html">
        Mesin Learning</a> Point Of Sale</h1>
<div id="info">
    <p id="info_start">Clik Star Untuk Memulai.</p>
    <p id="info_speak_now">Bicara Sekarang.</p>
    <p id="info_no_speech">Tidak ada ucapan yang terdeteksi
        <a href="//support.google.com/chrome/bin/answer.py?hl=en&amp;answer=1407892">
            microphone settings</a>.</p>
    <p id="info_no_microphone" style="display:none">
        No microphone was found. Ensure that a microphone is installed and that
        <a href="//support.google.com/chrome/bin/answer.py?hl=en&amp;answer=1407892">
            microphone settings</a> are configured correctly.</p>
    <p id="info_allow">Click the "Allow" button above to enable your microphone.</p>
    <p id="info_denied">Permission to use microphone was denied.</p>
    <p id="info_blocked">Permission to use microphone is blocked. To change,
        go to chrome://settings/contentExceptions#media-stream</p>
    <p id="info_upgrade">Web Speech API is not supported by this browser.
        Upgrade to <a href="//www.google.com/chrome">Chrome</a>
        version 25 or later.</p>
</div>
<div class="right">
    <button id="start_button" onclick="startButton(event)">
        <img id="start_img" src="mic.gif" alt="Start"></button>
</div>
<div id="results">
    <span id="final_span" class="final"></span>
    <span id="interim_span" class="interim"></span>
    <p>
</div>
<div class="center">

    <p>
    <div id="div_language">
        <select id="select_language" onchange="updateCountry()"></select>
        &nbsp;&nbsp;
        <select id="select_dialect"></select>
    </div>
</div>
<style>
    * {
        font-family: Verdana, Arial, sans-serif;
    }
    a:link {
        color:#000;
        text-decoration: none;
    }
    a:visited {
        color:#000;
    }
    a:hover {
        color:#33F;
    }
    .button {
        background: -webkit-linear-gradient(top,#008dfd 0,#0370ea 100%);
        border: 1px solid #076bd2;
        border-radius: 3px;
        color: #fff;
        display: none;
        font-size: 13px;
        font-weight: bold;
        line-height: 1.3;
        padding: 8px 25px;
        text-align: center;
        text-shadow: 1px 1px 1px #076bd2;
        letter-spacing: normal;
    }
    .center {
        padding: 10px;
        text-align: center;
    }
    .final {
        color: black;
        padding-right: 3px; 
    }
    .interim {
        color: gray;
    }
    .info {
        font-size: 14px;
        text-align: center;
        color: #777;
        display: none;
    }
    .right {
        float: right;
    }
    .sidebyside {
        display: inline-block;
        width: 45%;
        min-height: 40px;
        text-align: left;
        vertical-align: top;
    }
    #headline {
        font-size: 40px;
        font-weight: 300;
    }
    #info {
        font-size: 20px;
        text-align: center;
        color: #777;
        visibility: hidden;
    }
    #results {
        font-size: 14px;
        font-weight: bold;
        border: 1px solid #ddd;
        padding: 15px;
        text-align: left;
        min-height: 150px;
    }
    #start_button {
        border: 0;
        background-color:transparent;
        padding: 0;
    }
</style>
<script src="<?php echo base_url() ?>assets/jquery.min.js"></script>
<script>
            function cerdas() {
                var nama = $("#nama").val();
                var no = $("#no").val();
                var angka = $("#angka").val();
                var lahir = $("#lahir").val();
                var ulang_tahun = $("#ulang_tahun").val();
                $.ajax({
                    type: 'GET',
                    url: '<?php echo base_url() ?>index.php/Cerdas/tampil',
                    data: 'nama=' + nama + '&no=' + no + '&angka=' + angka + '&lahir=' + lahir + '&ulang_tahun=' + ulang_tahun,
                    success: function (html) {
                        swal("Sistem Ok", "Silahkan Dicermati", "success");
                         $("#umur").html(html);

                    }
                })
            }
</script>
<script>
    var langs =
            [['Afrikaans', ['af-ZA']],
                ['Bahasa Indonesia', ['id-ID']],
                ['Bahasa Melayu', ['ms-MY']],
                ['Catal??', ['ca-ES']],
                ['??e??tina', ['cs-CZ']],
                ['Deutsch', ['de-DE']],
                ['English', ['en-AU', 'Australia'],
                    ['en-CA', 'Canada'],
                    ['en-IN', 'India'],
                    ['en-NZ', 'New Zealand'],
                    ['en-ZA', 'South Africa'],
                    ['en-GB', 'United Kingdom'],
                    ['en-US', 'United States']],
                ['Espa??ol', ['es-AR', 'Argentina'],
                    ['es-BO', 'Bolivia'],
                    ['es-CL', 'Chile'],
                    ['es-CO', 'Colombia'],
                    ['es-CR', 'Costa Rica'],
                    ['es-EC', 'Ecuador'],
                    ['es-SV', 'El Salvador'],
                    ['es-ES', 'Espa??a'],
                    ['es-US', 'Estados Unidos'],
                    ['es-GT', 'Guatemala'],
                    ['es-HN', 'Honduras'],
                    ['es-MX', 'M??xico'],
                    ['es-NI', 'Nicaragua'],
                    ['es-PA', 'Panam??'],
                    ['es-PY', 'Paraguay'],
                    ['es-PE', 'Per??'],
                    ['es-PR', 'Puerto Rico'],
                    ['es-DO', 'Rep??blica Dominicana'],
                    ['es-UY', 'Uruguay'],
                    ['es-VE', 'Venezuela']],
                    ['Euskara', ['eu-ES']],
                    ['Fran??ais', ['fr-FR']],
                    ['Galego', ['gl-ES']],
                    ['Hrvatski', ['hr_HR']],
                    ['IsiZulu', ['zu-ZA']],
                    ['??slenska', ['is-IS']],
                    ['Italiano', ['it-IT', 'Italia'],
                        ['it-CH', 'Svizzera']],
                    ['Magyar', ['hu-HU']],
                    ['Nederlands', ['nl-NL']],
                    ['Norsk bokm??l', ['nb-NO']],
                    ['Polski', ['pl-PL']],
                    ['Portugu??s', ['pt-BR', 'Brasil'],
                        ['pt-PT', 'Portugal']],
                    ['Rom??n??', ['ro-RO']],
                    ['Sloven??ina', ['sk-SK']],
                    ['Suomi', ['fi-FI']],
                    ['Svenska', ['sv-SE']],
                    ['T??rk??e', ['tr-TR']],
                    ['??????????????????', ['bg-BG']],
                    ['P????????????', ['ru-RU']],
                    ['????????????', ['sr-RS']],
                    ['?????????', ['ko-KR']],
                    ['??????', ['cmn-Hans-CN', '????????? (????????????)'],
                    ['cmn-Hans-HK', '????????? (??????)'],
                    ['cmn-Hant-TW', '?????? (??????)'],
                    ['yue-Hant-HK', '?????? (??????)']],
                    ['?????????', ['ja-JP']],
                    ['Lingua lat??na', ['la']]];
    for (var i = 0; i < langs.length; i++) {
        select_language.options[i] = new Option(langs[i][0], i);
    }
    select_language.selectedIndex = 6;
    updateCountry();
    select_dialect.selectedIndex = 6;
    showInfo('info_start');
    function updateCountry() {
        for (var i = select_dialect.options.length - 1; i >= 0; i--) {
            select_dialect.remove(i);
        }
        var list = langs[select_language.selectedIndex];
        for (var i = 1; i < list.length; i++) {
            select_dialect.options.add(new Option(list[i][1], list[i][0]));
        }
        select_dialect.style.visibility = list[1].length == 1 ? 'hidden' : 'visible';
    }
    var create_email = false;
    var final_transcript = '';
    var recognizing = false;
    var ignore_onend;
    var start_timestamp;
    if (!('webkitSpeechRecognition' in window)) {
        upgrade();
    } else {
        start_button.style.display = 'inline-block';
        var recognition = new webkitSpeechRecognition();
        recognition.continuous = true;
        recognition.interimResults = true;
        recognition.onstart = function () {
            recognizing = true;
            showInfo('info_speak_now');
            start_img.src = 'mic-animate.gif';
        };
        recognition.onerror = function (event) {
            if (event.error == 'no-speech') {
                start_img.src = 'mic.gif';
                showInfo('info_no_speech');
                ignore_onend = true;
            }
            if (event.error == 'audio-capture') {
                start_img.src = 'mic.gif';
                showInfo('info_no_microphone');
                ignore_onend = true;
            }
            if (event.error == 'not-allowed') {
                if (event.timeStamp - start_timestamp < 100) {
                    showInfo('info_blocked');
                } else {
                    showInfo('info_denied');
                }
                ignore_onend = true;
            }
        };
        recognition.onend = function () {
            recognizing = false;
            if (ignore_onend) {
                return;
            }
            start_img.src = 'mic.gif';
            if (!final_transcript) {
                showInfo('info_start');
                return;
            }
            showInfo('');
            if (window.getSelection) {
                window.getSelection().removeAllRanges();
                var range = document.createRange();
                range.selectNode(document.getElementById('final_span'));
                window.getSelection().addRange(range);
            }
            if (create_email) {
                create_email = false;
                createEmail();
            }
        };
        recognition.onresult = function (event) {
            var interim_transcript = '';
            for (var i = event.resultIndex; i < event.results.length; ++i) {
                if (event.results[i].isFinal) {
                    final_transcript += event.results[i][0].transcript;
                } else {
                    interim_transcript += event.results[i][0].transcript;
                }
            }
            final_transcript = capitalize(final_transcript);
            final_span.innerHTML = linebreak(final_transcript);
            interim_span.innerHTML = linebreak(interim_transcript);
            if (final_transcript || interim_transcript) {
                showButtons('inline-block');
            }
        };
    }
    function upgrade() {
        start_button.style.visibility = 'hidden';
        showInfo('info_upgrade');
    }
    var two_line = /\n\n/g;
    var one_line = /\n/g;
    function linebreak(s) {
        return s.replace(two_line, '<p></p>').replace(one_line, '<br>');
    }
    var first_char = /\S/;
    function capitalize(s) {
        return s.replace(first_char, function (m) {
            return m.toUpperCase();
        });
    }
    function startButton(event) {
        if (recognizing) {
            recognition.stop();
            return;
        }
        final_transcript = '';
        recognition.lang = select_dialect.value;
        recognition.start();
        ignore_onend = false;
        final_span.innerHTML = '';
        interim_span.innerHTML = '';
        start_img.src = 'mic-slash.gif';
        showInfo('info_allow');
        showButtons('none');
        start_timestamp = event.timeStamp;
    }
    function showInfo(s) {
        if (s) {
            for (var child = info.firstChild; child; child = child.nextSibling) {
                if (child.style) {
                    child.style.display = child.id == s ? 'inline' : 'none';
                }
            }
            info.style.visibility = 'visible';
        } else {
            info.style.visibility = 'hidden';
        }
    }
    var current_style;
    function showButtons(style) {
        if (style == current_style) {
            return;
        }
        current_style = style;
        copy_button.style.display = style;
        email_button.style.display = style;
        copy_info.style.display = 'none';
        email_info.style.display = 'none';
    }
</script>