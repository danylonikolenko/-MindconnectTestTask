/*----------Task8-----------*/
var arr = [1, 2, 3, 5, 1, 5, 9, 1, 2, 8];

function unique(arr) {
    var result = [];
    for (let str of arr) {
        if (!result.includes(str)) {
            result.push(str);
        }
    }
    return result;
}

var task8 = unique(arr);
$(".startArray-task8").text("For array [" + arr + "] result is:");
$('.task8').text("[" + task8 + "]");

/*----------Task9-----------*/
function duplicate(arr, times) {
    return new Array(times).fill(arr).flat();
}

var arr1 = [1, 2, 3, 4, 5];
var times = 3;
var task9 = duplicate(arr1, times);
$(".startArray-task9").text("For array [" + arr1 + "], times " + times + " result is:");
$('.task9').text("[" + task9 + "]");

/*----------Task10-----------*/


$(document).on("click", "button", function () {
    // alert($(this).text());
    console.log("Button Clicked:", this);
});

$(".html").append("<button>Click Alert!</button>");

/*----------Task11-----------*/
var count = $(".badge").text();
$(".btn").click(function () {
    ++count;
    $(".badge").text(count);
});


