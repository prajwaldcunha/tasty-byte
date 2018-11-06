// State lists
var states = new Array("Karnataka","Kerala","Maharashtra");

// City lists
var city = new Array();

city['Karnataka'] = new Array("Mangalore","Bangalore","Mandya");
city['Kerala'] = new Array("Trivandrum","Kochi","Kasargod");
city['Maharashtra'] = new Array("Mumbai","Pune","Nagpur");




function setcity() {
  stateSel = document.getElementById("state");
  cityList = city[stateSel.value];
  changeSelect("city", cityList, cityList);
}

function changeSelect(fieldID, newOptions, newValues) {
  selectField = document.getElementById(fieldID);
  selectField.options.length = 0;
  for (i=0; i<newOptions.length; i++) {
    selectField.options[selectField.length] = new Option(newOptions[i], newValues[i]);
  }
}

// Multiple onload function created by: Simon Willison
// http://simonwillison.net/2004/May/26/addLoadEvent/
function addLoadEvent(func) {
  var oldonload = window.onload;
  if (typeof window.onload != "function") {
    window.onload = func;
  } else {
    window.onload = function() {
      if (oldonload) {
        oldonload();
      }
      func();
    }
  }
}

addLoadEvent(function() {
  setcity();
});
