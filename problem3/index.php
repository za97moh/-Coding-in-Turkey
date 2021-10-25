<html>

<body>
    <h2>Fridge Items</h2>
    <table id="content">
        <thead>
            <td>
                <b>Item</b>
            </td>
            <td>
                <b>Count</b>
            </td>
            <td>
                <b>Remove</b>
            </td>
        </thead>
        <tbody>
            <tr>
                <td>Cucumber</td>
                <td>3</td>
                <td><button onClick="remove(event)">X</button></td>
            </tr>
            <tr>
                <td>Lettuce</td>
                <td>5</td>
                <td><button onClick="remove(event)">X</button></td>
            </tr>
        </tbody>
    </table>
    <br />
      <span style="color:green ">* please enter the value separet whith signle whitespace then the count </span><br><br>
    <span id="err_msg" style="display:none; color:red">*</span>
    <input type="text" id="content_name">
    <button id="add_new">Add</button>
</body>
<script>
let add_btn = document.getElementById('add_new');
let add_input = document.getElementById('content_name');
let table_add = document.getElementById('content');
let err_msg = document.getElementById('err_msg');


add_btn.addEventListener('click', function() {
    let value_input = add_input.value;

    if (value_input == '' || !isNaN(value_input)) {

        err_msg.style.display = "block";
        err_msg.textContent = "Error PLease Enter Valid Value";

        setTimeout(function() {
            err_msg.style.display = "none";
        }, 1500);
    } else {

        let spilt_val = value_input.split(' ');

        var newRow = table_add.insertRow();
        newRow.innerHTML = "<td>"+spilt_val[0]+"</td><td>"+spilt_val[1]+"</td><td><button onClick='remove(event)'>X</button></td>";

    }
});

function remove(event) {
  let target = event.target;
  let parent = target.parentElement.parentElement;
  parent.remove();
}
</script>
<style>
td {
    padding-right: 50px;
}
</style>

</html>