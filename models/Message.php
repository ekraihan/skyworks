<?php
/**
 * Message.php
 * AUTHOR: Elias Kraihanzel
 * DATE: 11/15/17
 */

include_once "models/Model.php";

class Message extends Model {
    protected $MessageId;
    protected $AgentId;
    protected $UserId;
    protected $Message;
    protected $TicketId;
    protected $DateSent;
    protected $IsAgentReply;

    /**
     * @param mixed $AgentId
     * @return Message
     */
    public function set_agent_id($AgentId)
    {
        $this->AgentId = $AgentId;
        return $this;
    }

    /**
     * @param mixed $UserId
     * @return Message
     */
    public function set_user_id($UserId)
    {
        $this->UserId = $UserId;
        return $this;
    }

    /**
     * @param mixed $Message
     * @return Message
     */
    public function set_message($Message)
    {
        $this->Message = $Message;
        return $this;
    }

    /**
     * @param mixed $IsAgentReply
     * @return Message
     */
    public function set_is_agent_reply($IsAgentReply)
    {
        $this->IsAgentReply = $IsAgentReply;
        return $this;
    }

    /**
     * @param mixed $TicketId
     * @return Message
     */
    public function set_ticket_id($TicketId)
    {
        $this->TicketId = $TicketId;
        return $this;
    }


}