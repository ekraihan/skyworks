<?php
/**
 * Ticket.php
 * AUTHOR: Elias Kraihanzel
 * DATE: 11/15/17
 */

include_once "models/Model.php";

class Ticket extends Model {

    protected $TicketId;
    protected $ProductId;
    protected $CreationDate;
    protected $CloseDate;
    protected $StatusId;
    protected $UserId;
    protected $AgentId;
    protected $ClosedBy;
    protected $Rating;

    /**
     * @param mixed $ProductId
     * @return Ticket
     */
    public function set_product_id($ProductId)
    {
        $this->ProductId = $ProductId;
        return $this;
    }

    /**
     * @param mixed $UserId
     * @return Ticket
     */
    public function set_user_id($UserId)
    {
        $this->UserId = $UserId;
        return $this;
    }

    /**
     * @param mixed $StatusId
     * @return Ticket
     */
    public function set_status($StatusId)
    {
        $this->StatusId = $StatusId;
        return $this;
    }

    /**
     * @param mixed $Rating
     * @return Ticket
     */
    public function set_rating($Rating)
    {
        $this->Rating = $Rating;
        return $this;
    }

}