@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')
    <!-- Stats Cards -->
    <div class="row row-cols-1 row-cols-md-4 g-4" id="statsCards">
        <div class="col">
            <div class="card h-100 bg-white shadow-sm border-0 rounded-4 p-3 text-center">
                <h3 class="fw-bold text-dark" id="newBookingValue">New Booking</h3>
                <p class="text-muted mb-1">1,879</p>
                <p class="text-success mb-0" id="newBookingChange"><i class="bi bi-arrow-up"></i> +7.5%</p>
            </div>
        </div>
        <div class="col">
            <div class="card h-100 bg-white shadow-sm border-0 rounded-4 p-3 text-center">
                <h3 class="fw-bold text-dark" id="availableRoomsValue">Available Rooms</h3>
                <p class="text-muted mb-1">55</p>
                <p class="text-warning mb-0" id="availableRoomsChange"><i class="bi bi-arrow-down"></i> -5.7%</p>
            </div>
        </div>
        <div class="col">
            <div class="card h-100 bg-white shadow-sm border-0 rounded-4 p-3 text-center">
                <h3 class="fw-bold text-dark" id="revenueValue">Revenue</h3>
                <p class="text-muted mb-1">$2,287</p>
                <p class="text-success mb-0" id="revenueChange"><i class="bi bi-arrow-up"></i> +5.3%</p>
            </div>
        </div>
        <div class="col">
            <div class="card h-100 bg-white shadow-sm border-0 rounded-4 p-3 text-center">
                <h3 class="fw-bold text-dark" id="checkOutValue">Checkout</h3>
                <p class="text-muted mb-1">567</p>
                <p class="text-warning mb-0" id="checkOutChange"><i class="bi bi-arrow-down"></i> -2.4%</p>
            </div>
        </div>
    </div>

    <!-- Room Availability and Reservation -->
    <div class="row mt-4">
        <div class="col-md-4">
            <div class="card p-3 shadow-sm rounded-3 h-100">
                <h5 class="fw-bold">Room Availability</h5>
                <div class="row mt-3">
                    <div class="col-md-6">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <div style="width: 100px; height: 20px; background-color: #f4a261;" class="me-2"></div>
                            <p class="mb-0">Occupied <span class="fw-bold">125</span></p>
                        </div>
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <div style="width: 100px; height: 20px; background-color: #e9c46a;" class="me-2"></div>
                            <p class="mb-0">Reserved <span class="fw-bold">87</span></p>
                        </div>
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <div style="width: 100px; height: 20px; background-color: #a8d5ba;" class="me-2"></div>
                            <p class="mb-0">Available <span class="fw-bold">57</span></p>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <div style="width: 100px; height: 20px; background-color: #d3d3d3;" class="me-2"></div>
                            <p class="mb-0">Not Ready <span class="fw-bold">25</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card p-3 shadow-sm rounded-3 h-100 d-flex flex-column">
                <h5 class="fw-bold">Reservation</h5>
                <div class="legend d-flex justify-content-end mb-2">
                    {{-- <span class="me-3"><span style="color: #6a0dad; margin-right: 5px;">●</span> Booked</span>
                    <span><span style="color: #f4a261; margin-right: 5px;">●</span> Canceled</span> --}}
                </div>
                <div class="flex-grow-1">
                    <canvas id="reservationChart"></canvas>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Dữ liệu từ hình ảnh
            const data = {
                labels: ['01 Jan', '02 Jan', '03 Jan', '04 Jan', '05 Jan', '06 Jan', '07 Jan', '08 Jan'],
                datasets: [{
                    label: 'Booked',
                    data: [44, 55, 41, 67, 13, 43, 55, 64],
                    backgroundColor: '#6a0dad',
                    borderRadius: 8,
                    barThickness: 25,
                    stack: 'Stack 0'
                }, {
                    label: 'Canceled',
                    data: [13, 23, 20, 18, 13, 27, 12, 9],
                    backgroundColor: '#f4a261',
                    borderRadius: 8,
                    barThickness: 25,
                    stack: 'Stack 0'
                }]
            };

            // Cấu hình biểu đồ
            const config = {
                type: 'bar',
                data: data,
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    scales: {
                        x: {
                            stacked: true
                        },
                        y: {
                            stacked: true,
                            beginAtZero: true,
                            max: 100,
                            ticks: {
                                stepSize: 20
                            }
                        }
                    },
                    plugins: {
                        legend: {
                            position: 'top',
                            align: 'end',
                            labels: {
                                boxWidth: 10,
                                padding: 10
                            }
                        },
                        datalabels: {
                            anchor: 'end',
                            align: 'top',
                            formatter: (value) => value,
                            color: '#000',
                            font: {
                                weight: 'bold'
                            }
                        }
                    }
                }
            };

            // Tạo biểu đồ
            const ctx = document.getElementById('reservationChart').getContext('2d');
            new Chart(ctx, config);
        });
    </script>
@endsection
