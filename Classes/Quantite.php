<?php
/**
 * Created by PhpStorm.
 * User: ocean
 * Date: 18/04/2016
 * Time: 15:09
 */

namespace BiblioNet\Classes;


class Quantite
{

    /**
     * @var Livre
     */
    private $livre;
    /**
     * @var Commande
     */
    private $commande;
    /**
     * @var int
     */
    private $quantite;

    /**
     * Quantite constructor.
     * @param Livre $livre
     * @param Commande $commande
     * @param int $quantite
     */
    public function __construct(Livre $livre, Commande $commande, $quantite)
    {
        $this->livre = $livre;
        $this->commande = $commande;
        $this->quantite = $quantite;
    }

    /**
     * @return Livre
     */
    public function getLivre()
    {
        return $this->livre;
    }

    /**
     * @param Livre $livre
     */
    public function setLivre($livre)
    {
        $this->livre = $livre;
    }

    /**
     * @return Commande
     */
    public function getCommande()
    {
        return $this->commande;
    }

    /**
     * @param Commande $commande
     */
    public function setCommande($commande)
    {
        $this->commande = $commande;
    }

    /**
     * @return int
     */
    public function getQuantite()
    {
        return $this->quantite;
    }

    /**
     * @param int $quantite
     */
    public function setQuantite($quantite)
    {
        $this->quantite = $quantite;
    }



}