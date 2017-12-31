function ajax_request_send(_url, _function, _var_list) {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            _function(this);
        }
    };
    xhttp.open("POST", _url, true);

    var send_string = '';
    for(var key in _var_list)
    {
        send_string += key + "=" + _var_list[key];
    }
    xhttp.send(send_string);
}

function update_section(_ajax_reponse)
{
    document.getElementById("demo").innerHTML = _ajax_reponse.responseText;
}