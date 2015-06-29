<?php

class Page
{
    private $p;     //当前页数
    private $page_size;     //每页显示多少条
    private $page_count;    //页面总数

    function __construct($p, $page_size, $page_count)
    {
        $this->p = $p;
        $this->page_size = $page_size;
        $this->page_count = $page_count;
    }

    /***
     * @return string
     * 显示分页
     */
    function page_show()
    {
        //echo $this->page_count;
        //如果当前页面数大于总页面数，直接返回 ""
        if ($this->p > $this->page_count) {
            return "";
        }

        $page_link = '<nav><ul class="pagination">';

        //判断是否有上一页
        if ($this->p != 1) {
            $page_link .= '<li><a href="?p='.($this->p-1).'" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>';
        }

        //当前页，前面的部分，
        //如果当前页+4 大于页面总数， 假设当前页是11
        if ($this->p + 4 > $this->page_count) {
            $x = $this->page_count - 9 > 1 ? $this->page_count - 9 : 1;     //不能小于1
            for ($i = $x; $i < $this->p; $i++) {
                $page_link .= '<li><a href="?p='.$i.'">' . $i . '</a></li>';
            }
        } elseif ($this->p > 6) {
            for ($i = $this->p - 5; $i < $this->p; $i++) {
                $page_link .= '<li><a href="?p='.$i.'">' . $i . '</a></li>';
            }
        } else {
            for ($i = 1; $i < $this->p; $i++) {
                $page_link .= '<li><a href="?p='.$i.'">' . $i . '</a></li>';
            }
        }

        //当前页面
        $page_link .= '<li class="active"><a href="javascript: void 0;">' . $this->p . '</a></li>';

        //当前页面后面的部分，

        if ($this->p < 6) {
            $x = $this->page_count < 10 ? $this->page_count : 10;
            for ($i = $this->p + 1; $i <= $x; $i++) {
                    $page_link .= '<li><a href="?p='.$i.'">' . $i . '</a></li>';
            }
        } elseif ($this->p + 4 <= $this->page_count) {
            $x = $this->p + 5 < $this->page_count ? $this->p + 5 : $this->page_count;
            for ($i = $this->p + 1; $i < $x; $i++) {
                $page_link .= '<li><a href="?p='.$i.'">' . $i . '</a></li>';
            }
        } else {
            for ($i = $this->p + 1; $i < $this->page_count + 1; $i++) {
                $page_link .= '<li><a href="?p='.$i.'">' . $i . '</a></li>';
            }
        }

        //判断是否有下一页
        if ($this->p != $this->page_count) {
            $page_link .= '<li><a href="#" aria-label="Next"><span aria-hidden="true">&raquo;</span></a></li>';
        }


        $page_link .= '</ul></nav>';

        return $page_link;
    }


}
