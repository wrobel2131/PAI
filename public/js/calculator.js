

function calculate()
{
    let input1 = parseInt(document.querySelector('input[name="reps"]').value);
    let input2 = parseInt(document.querySelector('input[name="weight"]').value);

    let result = (((input1 * input2) * 0.0333) + input2);
    document.querySelector('output[name="result"]').innerHTML = (result).toFixed(2);
}
