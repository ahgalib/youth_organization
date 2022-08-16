$(document).ready(()=>{
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $(".about").click(()=>{

        let about = filter("about");
        $.ajax({
            url:'/homeAjax',
            type:'post',
            data:{about:about},
            success:function(data){
               alert(data);
            }
        });
    })


    function filter(className){
        let fillVal = [];
        $("."+className+":checked").each(()=>{
            fillVal.push($(this).val())
        });
        return fillVal;
    }
})