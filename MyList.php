<?php


class MyList
{
    public int $size;
    public array $elements;
    public array $firstArray;

    public function __construct(int $size, $arr = "")
    {
        $this->size = $size;
        if (is_array($arr))
        {
            $this->elements = $arr;
            $this->firstArray = $this->elements;

        } else {
            $this->elements = [];
        }
    }

    public function insert($index, $obj): void
    {
        array_splice($this->elements, $index, 0, $obj);
    }

    public function add($obj): void
    {
        array_push($this->elements, $obj);
    }

    public function remove($index)
    {
        array_splice($this->elements, $index, 1);
    }

    public function get($index): mixed
    {
        return $this->elements[$index];
    }

    public function clear(): void
    {
        unset($this->elements);
    }

    public function addAll($arr)
    {
       $this->elements = array_merge($this->elements, $arr);

    }

    public function indexOf($obj): int
    {

            return array_search($obj, $this->elements);


    }

    public function isEmpty(): bool
    {
        if (empty($this->elements))
        {
            echo -1;
            return true;
        } else {
            echo 1;
            return false;
        }
    }

    public function sort(): array
    {
        if (!$this->isEmpty()) {
            rsort($this->elements);
        } else {
            echo "empty";

        }
        return array();
    }

    public function size(): int
    {
        return count($this->elements);
    }

    public function reset(): array
    {
        return $this->elements = $this->firstArray;
    }

}