












<script>


    var list = document.getElementById('list');
    var add = document.getElementById('add');
    var user = document.getElementById('user');
    var dynamic_div = document.getElementById('dynamic_div')

    list.onclick=()=>{
        var req1 = new XMLHttpRequest();
        req1.open('GET','credentials/list.php',true);
        req1.send();

        req1.onreadystatechange=function(){
            if(req1.readyState==4 && req1.status==200){
                var data = req1.response;
                if(data){
                    dynamic_div.innerHTML=data;
                }else{

                    dynamic_div.innerHTML='data';
                }
                
                //console.log(data);
            }
        }
    }



</script>








</body>
</html>