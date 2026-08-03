<div class="widget bg-white p-a20 recent-posts-entry">
    <div class="title style-1">Statistik Pengunjung</div>
    <div class="widget-post-bx">
        <div id="container" class="widget-statistik_pengunjung">
            <table class="table table-striped table-inverse counter" cellpadding="0" cellspacing="5">
                <tbody>
                    <tr>
                        <td valign="middle">Hari Ini</td>
                        <td class="text-right counter-text">{{ Counter::allVisitors(1) }}</td>
                    </tr>
                    <tr>
                        <td valign="middle">Minggu Ini</td>
                        <td class="text-right counter-text">{{ Counter::allVisitors(7) }}</td>
                    </tr>
                    <tr>
                        <td valign="middle">Bulan Ini</td>
                        <td class="text-right counter-text">{{ Counter::allVisitors(30) }}</td>
                    </tr>
                    <tr>
                        <td valign="middle">Tahun Ini</td>
                        <td class="text-right counter-text">{{ Counter::allVisitors(365) }}</td>
                    </tr>
                    <tr>
                        <td valign="middle">Total Pengunjung</td>
                        <td class="text-right counter-text">{{ Counter::allVisitors() }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>