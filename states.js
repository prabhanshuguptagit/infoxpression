	window.onload=function()
{
	var s = '[{"NAMEVAR":"Andhra Pradesh","CODE":"1"},
		  {"NAMEVAR":"Arunachal Pradesh","CODE":"2"},
		   {"NAMEVAR":"Assam","CODE":"3"},
		    {"NAMEVAR":"Bihar","CODE":"4"},
		     {"NAMEVAR":"Chattishgarh","CODE":"5"},
		      {"NAMEVAR":"Goa","CODE":"6"},
		       {"NAMEVAR":"Gujarat","CODE":"7"},
		        {"NAMEVAR":"Haryana","CODE":"8"},
		         {"NAMEVAR":"Himachal Pracdesh","CODE":"9"},
		          {"NAMEVAR":"Jammu and Kashmir","CODE":"10"},
		           {"NAMEVAR":"Jharkhand","CODE":"11"},
		            {"NAMEVAR":"Karnataka","CODE":"12"},
		             {"NAMEVAR":"Kerela","CODE":"13"},
		              {"NAMEVAR":"Madhya Pradesh","CODE":"14"},
		               {"NAMEVAR":"Maharashtra","CODE":"15"},
		                {"NAMEVAR":"Manipur","CODE":"16"},
		                 {"NAMEVAR":"Meghalaya","CODE":"17"},
		                  {"NAMEVAR":"Mizoram","CODE":"18"},
		                   {"NAMEVAR":"Nagaland","CODE":"19"},
		                    {"NAMEVAR":"Odisha","CODE":"20"},
		                     {"NAMEVAR":"Punjab","CODE":"21"},
		                      {"NAMEVAR":"Rajasthan","CODE":"22"},
		                       {"NAMEVAR":"Sikkim","CODE":"23"},
		                        {"NAMEVAR":"Tamilnadu","CODE":"24"},
		                         {"NAMEVAR":"Telangana","CODE":"25"},
		                         {"NAMEVAR":"Tripura","CODE":"26"},
		                          {"NAMEVAR":"Uttar Pradesh","CODE":"27"},
		                           {"NAMEVAR":"Uttarakhand","CODE":"28"},
		                            {"NAMEVAR":"West Bengal","CODE":"29"},
		                             {"NAMEVAR":"Delhi","CODE":"30"}
		                 
		 ]';


var jsonData = $.parseJSON(window.localStorage.getItem("data"));

var $select = $('#mySelectID');
$(jsonData).each(function (index, o) {    
    var $option = $("<option/>").attr("value", o.CODE).text(o.NAMEVAR);
    $select.append($option);
});


$(function() { //run on document.ready
  $("#mySelectID").change(function() { //this occurs when select 1 changes
    
     if($(this).val() == '1'){
 $("#mySelectID2").html(""); 
   var s = '[{"NAMEVAR":"IPU","CODE":"1"},
   	     {"NAMEVAR":"IPU","CODE":"2"},
   	     {"NAMEVAR":"DU","CODE":"3"}
   	     
   	     
   	     ]';

var jsonData = $.parseJSON(s);

var $select = $('#mySelectID2');
$(jsonData).each(function (index, o) {    
    var $option = $("<option/>").attr("value", o.CODE).text(o.NAMEVAR);
    $select.append($option);
});
    
    }
    
    
     if($(this).val() == '2'){
  $("#mySelectID2").html(""); 

    var s = '[{"NAMEVAR":"VR","CODE":"1"},{"NAMEVAR":"MR","CODE":"2"}]';

var jsonData = $.parseJSON(s);

var $select = $('#mySelectID2');
$(jsonData).each(function (index, o) {    
    var $option = $("<option/>").attr("value", o.CODE).text(o.NAMEVAR);
    $select.append($option);
});
    
    
    }
    
    
    
   
   
    
  });
});
	}