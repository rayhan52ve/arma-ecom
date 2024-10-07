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
                    <div class="row m-3">
                        <div class="col-md-12">
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
                                        নাম
                                    <?php else: ?>
                                        Service
                                    <?php endif; ?>
                                </th>
                                <th>
                                    <?php if(session()->get('language') == 'bangla'): ?>
                                        Phone
                                    <?php else: ?>
                                        Phone
                                    <?php endif; ?>
                                </th>

                                <th>
                                    <?php if(session()->get('language') == 'bangla'): ?>
                                        নাম
                                    <?php else: ?>
                                        Service Duration
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
                                        নাম
                                    <?php else: ?>
                                        Address
                                    <?php endif; ?>
                                </th>
                                <th>
                                    Order Start Date|Time
                                </th>
                                <th>
                                    Order End Date|Time
                                </th>
                                <th>
                                    <?php if(session()->get('language') == 'bangla'): ?>
                                        Assigned Employee
                                    <?php else: ?>
                                        Assigned Employee
                                    <?php endif; ?>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($key + 1); ?></td>
                                    <td><?php echo e($item->user->name ?? null); ?></td>
                                    <td><?php echo e($item->service->name ?? null); ?></td>
                                    <td><?php echo e($item->user->phone ?? null); ?></td>
                                    <td><?php echo e($item->service_time ?? null); ?> (<?php echo e($item->charge_type ?? null); ?>)</td>
                                    <td class="text-success"><?php echo $item->payment->amount ?? '<span class="text-danger">Not Paid</span>'; ?></td>
                                    <td><?php echo e($item->address ?? null); ?></td>
                                    <td><?php echo e($item->created_at->toDayDateTimeString() ?? null); ?></td>
                                    <td><?php echo e($item->updated_at->toDayDateTimeString() ?? null); ?></td>
                                    <td><?php echo e($item->employee->name ?? null); ?></td>
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

                window.location.href = "<?php echo e(route('admin.salesReport')); ?>" + "?start_date=" + startDate +
                    "&end_date=" + endDate;

            });
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('super_admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\arma-ecom\resources\views/Admin/modules/report/sales.blade.php ENDPATH**/ ?>