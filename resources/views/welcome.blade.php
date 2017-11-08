<!DOCTYPE html>
<html>
<head>
    <!--Import Google Icon Font-->
    <!--Import materialize.css-->
    <link href="{{ asset('/resources/css/materialize.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('/resources/css/style.css') }}" rel="stylesheet" type="text/css">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

<body>


<div class="container">
    <div class="row">
        <br><br><br><br><br><br><br><br><br><br><br><br>
    </div>
    <div class="row">
        <div class="col s10  m10 offset-m1 offset-s1">
            <div class="row card-panel ">
                <div class="col s10 m12 ">
                    <div class="input-field col s12 m3">
                        <input id="text" type="text" class="validate">
                        <label for="text">项目名称</label>
                    </div>
                    <div class="input-field col s12 m3 ">
                        <select>
                            <option value="" disabled selected>工程类型</option>
                            <option value="1">屋面防水</option>
                            <option value="2">卫生间防水</option>
                            <option value="3">补漏</option>
                        </select>
                    </div>
                    <div class="input-field col s12 m3">
                        <input id="text" type="text" class="validate">
                        <label for="text">联系人</label>
                    </div>
                    <div class="input-field col s12 m3"><a class=" waves-effect waves-light btn-large  modal-trigger" href="#modal1">确定</a>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="row">
        <div id="test341" class="col s10 m10 offset-m1 offset-s1">
            <div class="card-panel">
                <div class="row">
                    <form action="#">
                    <p class="blue-text">施工人员</p>
                    <div class="col s5 m2 offset-s1 card-panel">
                            <p>
                                <input type="checkbox" id="g1" />
                                <label for="g1">李师傅</label>
                            </p>
                            <p>
                                <input type="checkbox" id="g2" />
                                <label for="g2">周师傅</label>
                            </p>
                            <p>
                                <input type="checkbox" id="g3" />
                                <label for="g3">新乃</label>
                            </p>
                            <p>
                                <input type="checkbox" id="g4" />
                                <label for="g4">小李师傅</label>
                            </p>
                            <p>
                                <input type="checkbox" id="g5" />
                                <label for="g5">发几</label>
                            </p>
                            <p>
                                <input type="checkbox" id="g6" />
                                <label for="g6">杨师傅</label>
                            </p>
                    </div>
                        <div class="col s5 m2 card-panel">
                            <p>
                                <input type="checkbox" class="filled-in" id="filled-in-box1"/>
                                <label for="filled-in-box1">上午</label>
                            </p>
                            <p>
                                <input type="checkbox" class="filled-in" id="filled-in-box2"/>
                                <label for="filled-in-box2">下午</label>
                            </p>
                            <p>
                                <input type="checkbox" class="filled-in" id="filled-in-box3"/>
                                <label for="filled-in-box3">全天</label>
                            </p>
                            <p>
                                <input type="checkbox" class="filled-in" id="filled-in-box4"/>
                                <label for="filled-in-box4">加班</label>
                            </p>
                    </div></form>
                </div>
            </div>
        </div>
    </div>





</div>


<!-- Modal Structure -->
<div id="modal1" class="modal bottom-sheet">
    <div class="modal-content">
        <h4>模态标题</h4>
        <p>一堆文本</p>
    </div>
    <div class="modal-footer">
        <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">同意</a>
    </div>
</div>


<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>

<script>
    $(document).ready(function(){
        // the "href" attribute of the modal trigger must specify the modal ID that wants to be triggered
        $('.modal').modal();
    });
    $(document).ready(function() {
        $('select').material_select();
    });
    $('.datepicker').pickadate({
        selectMonths: true, // Creates a dropdown to control month
        selectYears: 15 // Creates a dropdown of 15 years to control year
    });
    $(document).ready(function(){
        $('ul.tabs').tabs();
    });
</script>


</body>
</html>