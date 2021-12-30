<?php
//college fee structure
interface FeeStructure
{
    public function amount();
    public function description();
}
class BasicFee implements FeeStructure
{
    public function amount()
    {
        return 30000;
    }
    public function description()
    {
        return 'Basic College fee including books and dresses';
    }
}

class HostelFee implements FeeStructure
{
    protected FeeStructure $fee;

    /**
     * HostelFee constructor.
     * @param FeeStructure $fee
     */
    public function __construct(FeeStructure $fee)
    {
        $this->fee = $fee;
    }

    public function amount()
    {
        return 20000 + $this->fee->amount();
    }
    public function description()
    {
        return 'Basic College fee including books and dresses ' . $this->fee->description();
    }
}

class PlacementFee
{
    protected FeeStructure $fee;

    /**
     * PlacementFee constructor.
     * @param FeeStructure $fee
     */
    public function __construct(FeeStructure $fee)
    {
        $this->fee = $fee;
    }
    public function amount()
    {
        return 3000 + $this->fee->amount();
    }
    public function description()
    {
        return 'Basic College fee including books and dresses ' . $this->fee->description();
    }
}

class SportsFee implements FeeStructure
{
    protected FeeStructure $fee;

    /**
     * SportsFee constructor.
     * @param FeeStructure $fee
     */
    public function __construct(FeeStructure $fee)
    {
        $this->fee = $fee;
    }

    public function amount()
    {
        return 5000 + $this->fee->amount();
    }

    public function description()
    {
        return 'sports Fee for physical education' . $this->fee->description();
    }
}
$all = new PlacementFee(new HostelFee(new SportsFee(new BasicFee())));
var_dump($all->amount());
