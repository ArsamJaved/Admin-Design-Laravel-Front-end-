<footer>
    <div class="main-footer border-end border-top toggle-button ">
        <div class="d-flex align-items-center p-3">
            <p class="mb-0">Thank you for creating with EMS | 2024 ©</p>
            <a class="mx-1" href="https://themewagon.com">EMS</a>
        </div>
    </div>
</footer>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<script src="{{asset('assets/customjs/common.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="{{asset('assets/customjs/select2.js')}}"></script>
<script type="text/javascript">
    // Initialize the chart
    var chart = echarts.init(document.getElementById('line-chart'));

    // Specify chart configuration
    var option = {
        tooltip: {
            trigger: 'axis'
        },
        xAxis: {
            type: 'category',
            data: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun']
        },
        yAxis: {
            type: 'value'
        },
        series: [{
            name: 'Sales',
            type: 'line',
            data: [150, 230, 224, 218, 135, 147, 260]
        }]
    };

    // Use the specified configuration to show the chart
    chart.setOption(option);
</script>

<script type="text/javascript">
    // Initialize the chart
    var chart = echarts.init(document.getElementById('main'));

    // Specify chart configuration
    var option = {
        tooltip: {
            trigger: 'item'
        },
        legend: {
            top: '5%',
            left: 'center'
        },
        series: [{
            name: 'Access From',
            type: 'pie',
            radius: ['40%', '70%'],
            avoidLabelOverlap: false,
            itemStyle: {
                borderRadius: 10
            },
            label: {
                show: false,
                position: 'center'
            },
            emphasis: {
                label: {
                    show: true,
                    fontSize: 5,
                    fontWeight: 'bold'
                }
            },
            labelLine: {
                show: false
            },
            data: [{
                    value: 1048,
                    name: 'Search Engine'
                },
                {
                    value: 735,
                    name: 'Direct'
                },
                {
                    value: 580,
                    name: 'Email'
                },
                {
                    value: 484,
                    name: 'Union Ads'
                },
                {
                    value: 300,
                    name: 'Video Ads'
                }
            ]
        }]
    };

    // Set the specified option to the chart
    chart.setOption(option);
</script>

<script>
    $(document).ready(function() {
        setTimeout(function() {
            $('.my-select').select2({
                placeholder: 'Select a state',
                allowClear: true
            });
        }, 100);
    });
</script>