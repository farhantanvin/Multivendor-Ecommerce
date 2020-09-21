<?php
$link_limit = 10;
?>

@if ($paginator->lastPage() > 1)
    <ul class="pagination pagination-sm m-0 float-right">
        <li class="{{ ($paginator->currentPage() == 1) ? ' disabled' : '' }} page-item">
            <a href="{{ $paginator->url(1) }}" class="page-link">First</a>
        </li>
        @for ($i = 1; $i <= $paginator->lastPage(); $i++)
            <?php
            $half_total_links = floor($link_limit / 2);
            $from = $paginator->currentPage() - $half_total_links;
            $to = $paginator->currentPage() + $half_total_links;
            if ($paginator->currentPage() < $half_total_links) {
                $to += $half_total_links - $paginator->currentPage();
            }
            if ($paginator->lastPage() - $paginator->currentPage() < $half_total_links) {
                $from -= $half_total_links - ($paginator->lastPage() - $paginator->currentPage()) - 1;
            }
            ?>
            @if ($from < $i && $i < $to)
                <li class="{{ ($paginator->currentPage() == $i) ? ' active' : '' }} page-item">
                    <a href="{{ $paginator->url($i) }}" class="page-link">{{ $i }}</a>
                </li>
            @endif
        @endfor
        <li class="{{ ($paginator->currentPage() == $paginator->lastPage()) ? ' disabled' : '' }} page-item">
            <a href="{{ $paginator->url($paginator->lastPage()) }}" class="page-link">Last</a>
        </li>
    </ul>
@endif
