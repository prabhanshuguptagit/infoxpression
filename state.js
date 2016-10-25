var s = '[{"NAMEVAR":"Some Data 1","CODE":"1"},{"NAMEVAR":"Some Data 2","CODE":"2"}]';

var jsonData = $.parseJSON(s);

var $select = $('#mySelectID');
$(jsonData).each(function (index, o) {    
    var $option = $("<option/>").attr("value", o.CODE).text(o.NAMEVAR);
    $select.append($option);
    });