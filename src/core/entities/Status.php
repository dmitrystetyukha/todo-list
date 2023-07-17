<?php

namespace entities;

enum Status
{
    case ToDo;
    case InProgress;
    case Done;
    case Expired;
}