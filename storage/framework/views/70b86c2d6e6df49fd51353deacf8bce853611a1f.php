<?php $__env->startSection('content'); ?>
    <div class="container-fluid">

        <div class="card">
            <div class="card-body">

                <div class="table-responsive m-t-20">
                    <h3 class="text-center ">
                        <?php if(session()->get('language') == 'bangla'): ?>
                            <?php echo e($pageTitle); ?>

                        <?php else: ?>
                            <?php echo e($pageTitle); ?>

                        <?php endif; ?>
                    </h3>
                    <!-- Date Range Search Inputs -->
                    <div class="row justify-content-between m-3">
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-3">
                                    <label for="start_date">From Date:</label>
                                    <input type="date" id="start_date" class="form-control datepicker">
                                </div>
                                <div class="col-md-3">
                                    <label for="end_date">To Date:</label>
                                    <input type="date" id="end_date" class="form-control datepicker">
                                </div>
                                <div class="col-md-1 mt-3">
                                    <button id="search-btn" class="btn btn-lg btn-primary">Search</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <h3 class="mt-3">Total Service Profit: <span class="text-success"><?php echo e($serviceProfit); ?> &#2547;</span></h3>
                        </div>
                    </div>
                    <table id="config-table" class="table display table-striped border no-wrap">
                        <thead>
                            <tr>
                                <th>
                                    <?php if(session()->get('language') == 'bangla'): ?>
                                        সি.নং
                                    <?php else: ?>
                                        SL
                                    <?php endif; ?>
                                </th>
                                <th>
                                    <?php if(session()->get('language') == 'bangla'): ?>
                                        নাম
                                    <?php else: ?>
                                        Customer Name
                                    <?php endif; ?>
                                </th>
                                <th>
                                    <?php if(session()->get('language') == 'bangla'): ?>
                                        Assigned Employee
                                    <?php else: ?>
                                        Assigned Employee
                                    <?php endif; ?>
                                </th>
                                <th>
                                    <?php if(session()->get('language') == 'bangla'): ?>
                                        নাম
                                    <?php else: ?>
                                        Service
                                    <?php endif; ?>
                                </th>
                                <th>
                                    <?php if(session()->get('language') == 'bangla'): ?>
                                        Payment
                                    <?php else: ?>
                                        Payment
                                    <?php endif; ?>
                                </th>
                                <th>
                                    <?php if(session()->get('language') == 'bangla'): ?>
                                        Employee Payroll
                                    <?php else: ?>
                                        Employee Payroll
                                    <?php endif; ?>
                                </th>
                                <th>
                                    <?php if(session()->get('language') == 'bangla'): ?>
                                        Service Profit
                                    <?php else: ?>
                                        Service Profit
                                    <?php endif; ?>
                                </th>
                                <th>
                                    Order Start Date|Time
                                </th>
                                <th>
                                    Order End Date|Time
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($key + 1); ?></td>
                                    <td><?php echo e($item->user->name ?? null); ?></td>
                                    <td><?php echo e($item->employee->name ?? null); ?></td>
                                    <td><?php echo e($item->service->name ?? null); ?></td>
                                    <td class="text-success"><?php echo $item->payment->amount ?? '<span class="text-danger">Due</span>'; ?></td>
                                    <td class="text-danger"><?php echo $item->payroll->payroll ?? '<span class="text-danger">Due</span>'; ?></td>
                                    <td><?php echo isset($item->payment->amount, $item->payroll->payroll) ? $item->payment->amount - $item->payroll->payroll : '<span class="text-danger">N/A</span>'; ?></td>
                                    <td><?php echo e($item->created_at->toDayDateTimeString() ?? null); ?></td>
                                    <td><?php echo e($item->updated_at->toDayDateTimeString() ?? null); ?></td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('#search-btn').on('click', function() {
                var startDate = $('#start_date').val();
                var endDate = $('#end_date').val();

                window.location.href = "<?php echo e(route('admin.serviceProfitReport')); ?>" + "?start_date=" +
                    startDate +
                    "&end_date=" + endDate;

            });
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('super_admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\arma-ecom\resources\views/Admin/modules/report/service_profit.blade.php ENDPATH**/ ?>