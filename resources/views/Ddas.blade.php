@extends('template.mainAdmin')

@section('tampilan')
<div id='chart1'>

    <canvas id="myChart"></canvas>
</div>

<style>
#chart1 {
    max-width: 25rem;
}
</style>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


<script>
const ctx = document.getElementById('myChart');

new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
        datasets: [{
            label: '# of Votes',
            data: [12, 19, 3, 5, 2, 3],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});
</script>
@endsection