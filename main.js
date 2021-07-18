$(document).ready(function () {
    $('form').submit(function(){
        $.ajax({
            type: "POST",
            url: "saveContact.php",
            data: $("#contact").serialize(),    /*序列化表單的值 */
            success: function (data) {
                var value = parseInt(data);
                if(value == 1)
                    $("#msg").html("已成功新增紀錄！");
                else
                    $("#msg").html("新增紀錄失敗！");
            }
        });

        return false;               /*停止瀏覽器執行其他函式 */
    });

    $('a.getnum').click(function(){
        $.ajax({
            type: "POST",
            url: "getPhoneNumber.php",
            data: $("#contact").serialize(),
            success: function (data) {
                $("#msg").html("載入網頁成功！");
                $("#phone").val(data);
            }
        });

        return false;
    });
});