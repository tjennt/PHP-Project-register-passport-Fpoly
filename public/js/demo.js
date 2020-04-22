function trans1(){
    //Get giá trị id của input
    var username = document.getElementById('username').value;
        var pattern =/(?:[A-Z][a-z]*.{0,2}[a-z] *\s+)+(?:[A-Z][a-z]*.{0,2}[a-z]*)/;
    var datepicker1 = document.getElementById('datepicker1').value;
    // var gender = document.getElementById('gender').value;
    var wherebirth = document.getElementById('wherebirth').value;
    var identity = document.getElementById('identity').value;
    var datepicker2 = document.getElementById('datepicker2').value;
    var whereidentity = document.getElementById('whereidentity').value;
    var enthic = document.getElementById('enthic').value;
    var religion = document.getElementById('religion').value;
    var phone = document.getElementById('phone').value;
    var address = document.getElementById('address').value;
    var district = document.getElementById('district').value;
    var namedistrict = document.getElementById('namedistrict').value;
    var job = document.getElementById('job').value;
    var wherejob = document.getElementById('wherejob').value;
    var x = document.getElementById("fileHinh").value;

    //Set điều kiện nếu input rỗng sẽ thông báo alert cho user
    if(username == '' ){
        alert('Vui lòng nhập tên');
    }else if(datepicker1 == ''){
        alert('Vui lòng chọn ngày sinh');
    }else if(gender ==''){
        alert('vui lòng chọn giới tính ')
    }else if(wherebirth == null){
        alert('vui lòng chọn nơi sinh ');
    }else if(identity ==''){
        alert('vui lòng nhập cmnd ');
    }else if(datepicker2 ==''){
        alert('vui lòng chọn ngày làm  ');
    }else if(whereidentity == null){
        alert('vui lòng chọn nơi làm cmnd  ');
    }else if(enthic == null){
        alert('vui lòng chọn dân tộc ');
    }else if(religion == null){
        alert('vui lòng chọn tôn giáo ');
    }else if(phone ==''){
        alert('vui lòng điền số điện thoại  ');
    }else if(address ==  null){
        alert('vui lòng nhập địa chỉ  ');
    }else if(district ==''){
        alert('vui lòng nhập địa chỉ  ');
    }else if(namedistrict ==''){
        alert('vui lòng nhập điạ chỉ  ');
    }else if(job ==''){
        alert('vui lòng chọn công việc  ');
    }else if(wherejob ==''){
        alert('vui lòng chọn nơi làm việc  ');
    }else if(!x){
        alert("Vui lòng upload file hình ảnh");
        jQuery("#fileHinh").css({"border":"1px solid red"});
    }
    // Nếu input không trống sẽ chuyển sang slide 2
    else{
        document.getElementById("type1").style.display="none";
        document.getElementById("type2").style.display="block";

        document.getElementById("type1").style.opacity=0;
        document.getElementById("type2").style.opacity=1;

            document.getElementById("page1").style.opacity=1;
            document.getElementById("page2").style.opacity=0;
            document.getElementById("page2").style.display ='none';
            document.getElementById("page1").style.display ='block';
        return true;
    }

    return false;

}
// function validateForm2(){
//     var pattern =/(?:[A-Z][a-z]*.{0,2}[a-z] *\s+)+(?:[A-Z][a-z]*.{0,2}[a-z]*)/;
//     var text = document.getElementById("username").value;
//     var email =/^[a-z][a-z0-9_\.]{5,32}@[a-z0-9]{2,}(\.[a-z0-9]{2,4}){1,2}$/;
//     var txt = document.getElementById("email").value;
//     var district =/(?:[A-Z][a-z]*.{0,2}[a-z]*)/;
//     var txt5 = document.getElementById("district").value;
//     var namedistrict =/(?:[A-Z][a-z]*.{0,2}[a-z]*)/;
//     var txt6 = document.getElementById("namedistrict").value;
//     var namedistrict =/(?:[A-Z][a-z]*.{0,2}[a-z]*)/;
//     var txt6 = document.getElementById("namedistrict").value;
//     var job =/(?:[A-Z][a-z]*.{0,2}[a-z]*)/;
//     var txt7 = document.getElementById("job").value;
//     var wherejob =/(?:[A-Z][a-z]*.{0,2}[a-z]*)/;
//     var txt8 = document.getElementById("wherejob").value;

//     if (text != pattern){
//         alert("Kieemr tra lai")
//     }
//     // // else if (datepicker3 == ''){
//     // //     alert('Bạn chưa nhập năm sinh cha');
//     // // }else if(namemother == ''){
//     // //     alert ('Bạn chưa nhập họ tên mẹ');
//     // // }else if(datepicker4 == ''){
//     // //     alert ('Bạn chưa nhập năm sinh cha');
//     // // }else if(namevo == ''){
//     // //     alert ('Bạn chưa nhập họ tên vợ/chồng');
//     // // }else if(datepicker5 == ''){
//     // //     alert ('Bạn chưa nhập ngày tên vợ/chồng');
//     // // }else if(nearidenty == ''){
//     // //     alert ('Bạn chưa nhập hộ chiếu');
//     // // }else if(datepicker6 == ''){
//     // //     alert ('Bạn chưa nhập ngày');
//     // // }else if(addresspass == ''){
//     // //     alert ('Bạn chưa nhập địa chỉ');
//     // // }
//     else{
//         alert('Thành công');
//         return true;
//     }
// }
function trans2(){
    document.getElementById("type1").style.display="block";
    document.getElementById("type2").style.display="none";

    document.getElementById("type1").style.opacity=1;
    document.getElementById("type2").style.opacity=0;

    document.getElementById("page1").style.opacity=0;
    document.getElementById("page2").style.opacity=1;
    document.getElementById("page1").style.display ='none';
    document.getElementById("page2").style.display ='block';
}


function check(){
    var pattern =/(?:[A-Z][a-z]*.{0,2}[a-z] *\s+)+(?:[A-Z][a-z]*.{0,2}[a-z]*)/;
    var patter1 =/[<>]/g;
    var text = document.getElementById("username").value;
    if(pattern.test(text) && !patter1.test(text) ){

        jQuery("#username").css({"border-color":"#ccc"});
    }
    else{
        jQuery("#username").css({"border":"1px solid red"});
        alert("Định dạng phải theo Họ và Tên quy định theo tiếng việt")
    }

}
function check2(){
    var email =/^[a-z][a-z0-9_\.]{5,32}@[a-z0-9]{2,}(\.[a-z0-9]{2,4}){1,2}$/;
    var txt = document.getElementById("email").value;
    if(email.test(txt)){

        jQuery("#email").css({"border-color":"#ccc"});
        jQuery("#icone").css({"display":"none"});
        jQuery("#icone1").css({"display":"none"});
    }else {
            jQuery("#email").css({"border":"1px solid red"});
            jQuery("#icone").css({"display":"block"});
            jQuery("#icone1").css({"display":"block"});
    }
}
function check5(){
    var district =/(?:[A-Z][a-z]*.{0,2}[a-z]*)/;
    var patter2 =/[<>]/g;
    var txt5 = document.getElementById("district").value;
    if(district.test(txt5) && !patter2.test(txt5)){

        jQuery("#district").css({"border":"1px solid #ccc"});

    }else {
            jQuery("#district").css({"border":"1px solid red"});
    }
};
function checknamedistrict(){
    var namedistrict =/(?:[A-Z][a-z]*.{0,2}[a-z]*)/;
    var patter3 =/[<>]/g;
    var txt6 = document.getElementById("namedistrict").value;
    if(namedistrict.test(txt6) && !patter3.test(txt6)){
        jQuery("#namedistrict").css({"border-color":"#ccc"});
    }else {
            jQuery("#namedistrict").css({"border":"1px solid red"});
    }
};
function check7(){
    var job =/(?:[A-Z][a-z]*.{0,2}[a-z]*)/;
    var patter4 =/[<>]/g;
    var txt7 = document.getElementById("job").value;
    if(job.test(txt7) && !patter4.test(txt7)){
        jQuery("#job").css({"border-color":"#ccc"});
    }else {
            jQuery("#job").css({"border":"1px solid red"});
    }
};
function check8(){
    var wherejob =/(?:[A-Z][a-z]*.{0,2}[a-z]*)/;
    var patter5 =/[<>]/g;
    var txt8 = document.getElementById("wherejob").value;
    if(wherejob.test(txt8) && !patter5.test(txt8)){
        jQuery("#wherejob").css({"border-color":"#ccc"});
    }else {
        jQuery("#wherejob").css({"border":"1px solid red"});
    }
};
function checkphone(){
    var phone =/^\d{10}$/;
    var txtphone = document.getElementById("phone").value;
    if(phone.test(txtphone)){
        jQuery("#phone").css({"border-color":"#ccc"});
    }else {
            jQuery("#phone").css({"border":"1px solid red"});

    }
};
function checkcmnd(){
    var cmnd = /^\d{9}$/;
    var txtcmnd = document.getElementById("identity").value;
    if(cmnd.test(txtcmnd)){
        jQuery("#identity").css({"border-color":"#ccc"});
    }else{
        jQuery("#identity").css({"border":"1px solid red"});

    }
}




