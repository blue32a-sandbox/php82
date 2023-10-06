<?php

enum E: string {
    case Hoge = 'hoge';
}

const HOGE = E::Hoge->name;
var_dump(HOGE);
