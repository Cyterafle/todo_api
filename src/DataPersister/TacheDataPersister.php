<?php
namespace App\DataPersister;

use ApiPlatform\Core\DataPersister\DataPersisterInterface;
use App\Entity\Tache;
use Doctrine\ORM\EntityManagerInterface;

class TacheDataPersister implements DataPersisterInterface
{

   private $entityManager;

   public function __construct(EntityManagerInterface $entityManager)
   {
       $this->entityManager = $entityManager;
   }

   public function supports($data): bool
   {
       return $data instanceof Tache;
   }

   public function persist($data)
   {
       if (!$data->getId()) {
           $data->setCreatedAt(new \DateTimeImmutable('now'));
       }
       $data->setUpdatedAt(new \DateTimeImmutable('now'));

       $this->entityManager->persist($data);
       $this->entityManager->flush();
   }

   public function remove($data)
   {
       $this->entityManager->remove($data);
       $this->entityManager->flush();
   }
}
