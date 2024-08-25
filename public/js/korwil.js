$('#id_provinsi').change(function(){ 
    var id=$(this).val();
    
    $.ajax({
        url: `${BASE_URL}/master/kabupaten/getKabupaten`,
        method : "POST",
        data: {
            id: id,
            csrf_test_name: $.cookie('csrf_cookie_name') 
        },
        async : true,
        dataType : 'json',
        success: function(data){
                
            var html = '';
            var i;
            for(i=0; i<data.length; i++){
                html += '<option value='+data[i].id+'>'+data[i].nama+'</option>';
            }
            $('#id_kabupaten').html(html);

        }
    });
    return false;
}); 

$('#id_kabupaten').change(function(){ 
    var id=$(this).val();
    
    $.ajax({
        url: `${BASE_URL}/master/kecamatan/getKecamatan`,
        method : "POST",
        
        data: {
            id: id,
            csrf_test_name: $.cookie('csrf_cookie_name')  
        },
        async : true,
        dataType : 'json',
        success: function(data){
                
            var html = '';
            var i;
            for(i=0; i<data.length; i++){
                html += '<option value='+data[i].id+'>'+data[i].nama+'</option>';
            }
            $('#id_kecamatan').html(html);

        }
    });
    return false;
}); 
$('#id_kecamatan').change(function(){ 
    var id=$(this).val();
    
    $.ajax({
        url: `${BASE_URL}/master/desa/getDesaCombo`,
        method : "POST",
        
        data: {
            id: id,
            csrf_test_name: $.cookie('csrf_cookie_name')  
        },
        async : true,
        dataType : 'json',
        success: function(data){
                
            var html = '';
            var i;
            for(i=0; i<data.length; i++){
                html += '<option value='+data[i].iddes+'>'+data[i].nama+'</option>';
            }
            $('#id_desa').html(html);

        }
    });
    return false;
}); 
$('#id_desa').change(function(){ 
    var id=$(this).val();
    
    $.ajax({
        url: `${BASE_URL}/master/banjar/getBanjarCombo`,
        method : "POST",
        
        data: {
            id: id,
            csrf_test_name: $.cookie('csrf_cookie_name')  
        },
        async : true,
        dataType : 'json',
        success: function(data){
                
            var html = '';
            var i;
            for(i=0; i<data.length; i++){
                html += '<option value='+data[i].id+'>'+data[i].nama+'</option>';
            }
            $('#id_banjar').html(html);

        }
    });
    return false;
}); 