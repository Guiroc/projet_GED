create function delete_doc_trigger() returns TRIGGER
as $delete_document$
begin
	insert into histo_document
	select document, old.*;
	return old;
end
$delete_document$ LANGUAGE plpgsql;

create trigger delete_document
after delete
on histo_document
for each row
execute procedure delete_doc_trigger()