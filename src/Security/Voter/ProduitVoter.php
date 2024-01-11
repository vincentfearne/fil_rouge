<?php

namespace App\Security\Voter;

use App\Entity\Produit;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Authorization\Voter\Voter;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\Security\Core\User\UserInterface;

class ProduitVoter extends Voter
{
    const EDIT = 'PRODUIT_EDIT';
    const DELETE = 'PRODUIT_DELETE';

    private $security;

    public function __construct(Security $security)
    {
        $this->security = $security;
    }

    protected function supports(string $attribute, $produit): bool
    {
        if(!in_array($attribute, [self::EDIT, self::DELETE])){
            return false;
        }
        if(!$produit instanceof Produit){
            return false;
        }
        return true;
    }

    protected function voteOnAttribute($attribute, $produit, TokenInterface $token): bool
    {
        //On récupère l'utilisateur à partir du token
        $user = $token->getUser();

        if (!$user instanceof UserInterface) return false;

        //On vérifie si l'utilisateur est admin
        if ($this->security->isGranted('ROLE_ADMIN')) return true;

        //On vérifie les permissions
        switch ($attribute)
        {
            case self::EDIT:
                //On vérifie si l'utilisateur peut éditer
                return $this->canEdit();
                break;
            case self::DELETE:
                //On vérifie si l'utilisateur peut supprimer
                return $this->canDelete();
                break;
        }
        return false;
    }


    private function canEdit(){
        return $this->security->isGranted('ROLE_PRODUIT_ADMIN');
    }
    private function canDelete(){
        return $this->security->isGranted('ROLE_PRODUIT_ADMIN');
    }

}