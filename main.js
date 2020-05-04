let submit = document.getElementById('SubmitBtn');
submit.addEventListener('click', ()=>{

    document.getElementById('responsePrism').innerHTML= "please wait ... Fetching response............";


    //fetch url
    let url = document.getElementById('urlField').value;
    let requestType= document.querySelector("input[name='requesttype']:checked").value;

    //log all values in the console 
    console.log(url);
    console.log(requestType );

    //if muser ha selected params option in place of json the take all the paramss in object,
    
    // if(contentType =='params'){
    //     data ={}
    //     for(i=0 ; i < addParamsCount+1 ; i++){
    //         if (document.getElementById('parameterkey' + (i+1))!=undefined){
    //         let key = document.getElementById('parameterkey' + (i+1)).value;
    //         let value  = document.getElementById('parametervalue' + (i+1)).value;
    //         data[key]= value;
    //         }
    //         data = JSON.stringify(data);
    //     }
    // }
    // else{
    //     data = document.getElementById('requestjsonText').value
    // }
    console.log(url );
    console.log(requestType );
    // console.log(contentType );
    // console.log(data);

    //if user clicked on the get ruquest then

    if(requestType == 'GET'){
        fetch(url, {
            method:'GET',

        }).then(response=> response.text()).then((text)=>{
            document.getElementById('responsePrism').innerHTML = text;
            prism.highlightAll();



        })
    }
    else{
        fetch(url, {
            method:'POST',
            body:data,
            headers: {
                "Content-type": "application/json; charset=UTF-8"
              }

        }).then(response=> response.text()).then((text)=>{
            document.getElementById('responsePrism').innerHTML = text;
            prism.highlightAll();

        })

    }
    
})