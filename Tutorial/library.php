<?php

class Library
{
    public function generateDate($remaining_days)
    {
        // $date = new DateTime('now', new DateTimeZone('Asia/Manila'));
        // $date_now = $date->format('m/d/Y');

        // return date("m/d/Y", strtotime($date_now . " + {$remaining_days} days"));

        $now = new DateTime();
        $now->modify("+{$remaining_days} days");
        $nextPayoutDate = $now->format('m/d/Y');

        return $nextPayoutDate;
    }

    public function checkArrayContent($arrayList = [], $boolean)
    {
        return in_array($boolean, $arrayList);
    }

    public function readArrayContent($arrayList = [])
    {
        foreach ($arrayList as $list) {
            echo "{$list}\n";
        }
    }
}
